<?php
$conn = mysqli_connect("localhost", "root", "", "add_empolyee") or die("connection failed");
// $response=[];
// var_dump($_REQUEST);

if (isset($_REQUEST["full_name"])) {
    $stmt = $conn->prepare("insert into add_employee_tbl(full_name,phone,email,password) values(?,?,?,?)");

    $stmt->bind_param("ssss", $_REQUEST['full_name'], $_REQUEST['phone'], $_REQUEST['email'], $_REQUEST['password']);
    if ($stmt->execute()) {
        $response['success'] = true;
        $response['message'] = 'User created successfully';
        $response['inserted_id'] = $conn->insert_id;  // Get the inserted record ID
    } else {

        $response['success'] = false;
        $response['message'] = 'Something went wrong. Please try again';
        $response['sql_error'] = $stmt->error;
    }

    echo json_encode($response);
}



if (isset($_REQUEST['dataget'])) {

    $sql = "SELECT *FROM add_employee_tbl";
    $result = mysqli_query($conn, $sql) or die("SQL Query failed");
    $data = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    $response['data'] = $data;
    echo json_encode($response);
}



if (isset($_POST['deleteId'])) {
    
    $userid = $_POST['deleteId'];

  
    $stmt = $conn->prepare("DELETE FROM add_employee_tbl WHERE id = ?");
    $stmt->bind_param("i", $userid);  

    
    if ($stmt->execute()) {
        echo "success";
    } else {
        echo "Error: " . $stmt->error;
    }

   
}




if(isset($_POST['editId'])){
    $sql = "SELECT * FROM add_employee_tbl where id={$_POST['editId']}";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $response['data'] = $result->fetch_assoc();
        $response['success'] = true;
        $response['message'] = 'User found successfully';
    } else {

        $response['success'] = false;
        $response['message'] = 'Something went wrong. Please try again';
        $response['sql_error'] = $stmt->error;
    }
echo json_encode($response);
}
?>
