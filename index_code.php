<?php
include("connection.php");

$email = $_POST['email'];
$password = $_POST['password'];

// echo $email.   $password;
$query = "select * from tbl_user where email='$email' and password='$password'";

$res = mysqli_query($con, $query);

if ($row = mysqli_fetch_array($res)) {
    $_SESSION['user'] = $email;

    $_SESSION['status'] = "login Successfully";
    $_SESSION['status_code'] = "success";
    header("location:notes.php");
} else {
    
    $_SESSION['status'] = "Invailid email / password";
    $_SESSION['status_code'] = "error";
    header("location:index.php");
}
