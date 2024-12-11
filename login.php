<?php
$con = mysqli_connect("localhost", "root", "", "new_login");

session_start();

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sel = "SELECT * FROM `tbl_login`WHERE `username`='$username' and `password`='$password'";
    $query = mysqli_query($con, $sel);
    $match = mysqli_num_rows($query);
    if ($match) {
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        echo 'success';
        
    } else {
        echo "User not login";
    }
}





?>