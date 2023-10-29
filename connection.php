<?php
session_start();
$host_name = "localhost";
$user = "root";
$password = "";
$database_name = "daily_kharch";

// creating database connection 
$con=mysqli_connect($host_name, $user, $password, $database_name);

// Check connection

if(!$con){
    die("Failed to connect". mysqli_connect_errno());
}

?>