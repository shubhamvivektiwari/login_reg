<?php
$con = mysqli_connect("localhost", "root", "", "new_login");
if(isset($_POST['register'])){
    // echo "$_POST";
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sel = "SELECT * FROM `tbl_login`WHERE `username`='$username' and `password`='$password'";
    $query = mysqli_query($con, $sel);
    $match = mysqli_num_rows($query);
    if($match){
        echo "User Already Exit";
    }else{
      $sel2 = "INSERT INTO `tbl_login` (`username`, `password`) VALUES ('$username', '$password')";
   
        $query2 = mysqli_query($con, $sel2);
        if($query2){
            echo "User Register";
        }else{
            echo "User Not Register";
        }
    }

}


?>