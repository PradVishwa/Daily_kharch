<?php
    session_start();
    $_SESSION['status']="logout Successfully";
    $_SESSION['status_code']="success";
    
    session_destroy();
    
    // echo "logout Successfully";
    header("location:index.php");

?>