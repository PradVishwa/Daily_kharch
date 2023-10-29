<?php
include ("connection.php");

$name = $_POST['name'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$password = $_POST['password'];
$re_password = $_POST['re_password'];

// echo $password . "<br>". $re_password;
if($password == $re_password){
    // "<br>";
    // echo $password . "<br>". $re_password; 
    $query="INSERT INTO tbl_user(name, mobile, email, password, dor) VALUES ('$name','$mobile','$email','$password',now())";
    // echo $query;
    mysqli_query($con, $query);

    $_SESSION['status']="Registration Successfully";
    $_SESSION['status_code']="success";

    header("location:index.php");
}else{
    $_SESSION['status']="Password not matched";
    $_SESSION['status_code']="error";
    header("location:index.php");
}
