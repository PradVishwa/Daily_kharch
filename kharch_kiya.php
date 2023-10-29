<?php
include "connection.php";



$user_id = $_POST['user_id'];
$item_name = $_POST['item_name'];
$item_qntt = $_POST['item_qntt'];
$item_amount = $_POST['item_amount'];

$query="insert into tbl_kharch(user_id, item_name, item_qntt, item_amount, person, amount, date, dor) values('$user_id','$item_name','$item_qntt','$item_amount','','',curdate(), now())";
mysqli_query($con, $query);

$_SESSION['status']="Data Inserted Successfully";
$_SESSION['status_code']="success";
header("location:notes.php");

?>