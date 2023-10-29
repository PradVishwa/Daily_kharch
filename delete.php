<?php
    include("connection.php");
    $id=$_REQUEST['id'];
    // echo $id;
    
    $query="delete from tbl_kharch where id='$id'";
    mysqli_query($con, $query);
    $_SESSION['status']="Data deleted Successfully";
    $_SESSION['status_code']="success";

    header("location:notes.php");
?>