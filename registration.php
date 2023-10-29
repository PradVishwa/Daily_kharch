<?php
include "connection.php";

// header section 
include("header.php");
?>

<!-- Register section  -->
<main class="m-lg-5 m-sm-5 m-5 justify-content-md-center justify-content-sm-around d-lg-flex">
    <form action="" method="POST">
        <div class="cord my-sm-3">
            <!-- <h1 class="text-center mb-5"><span class="D">D</span>aily <span class="K">K</span>harch<h1> -->
            <h3 class="h3 text-center mb-5 fw-normal text-sm-center text-lg-start bold">Register</h3>
            <div class="mb-3 ">
                <label for="exampleInputName" class="form-label"><i class='bx bx-user'></i> Name</label>
                <input type="text" class="form-control" id="exampleInputName" aria-describedby="nameHelp" name="name">
            </div>
            <div class="mb-3 ">
                <label for="exampleInputMobile" class="form-label"><i class='bx bx-phone'></i> Mobile</label>
                <input type="number" class="form-control" id="exampleInputMobile" aria-describedby="monileHelp" name="mobile">
            </div>
            <div class="mb-3 ">
                <label for="exampleInputEmail1" class="form-label"><i class='bx bx-envelope'></i> Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
            </div>
            <div class="mb-3 ">
                <label for="exampleInputPassword1" class="form-label"><i class='bx bx-lock-alt'></i> Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            </div>
            <div class="mb-3 ">
                <label for="exampleInputPassword1" class="form-label"><i class='bx bx-lock-alt'></i> Re-Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="re_password">
            </div>
            <div class="m-auto d-block mb-3">
                <button type="submit" name="register" class="btn btn-primary input-group">Register</button>
            </div>
            <div class="row">
                <a href="index.php">Have an already account?</a>
            </div>
        </div>
    </form>
</main>

<?php
// footer
include("footer.php");


if (isset($_POST['register'])) {
    
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $re_password = $_POST['re_password'];

    // echo $password . "<br>". $re_password;
    if ($password == $re_password) {
        // "<br>";
        // echo $password . "<br>". $re_password; 
        $query = "INSERT INTO tbl_user(name, mobile, email, password, dor) VALUES ('$name','$mobile','$email','$password',now())";
        // echo $query;
        mysqli_query($con, $query);

        $_SESSION['status'] = "Registration Successfully";
        $_SESSION['status_code'] = "success";

        header("location:index.php");
    } else {
        $_SESSION['status'] = "Password Not Matched ";
        $_SESSION['status_code'] = "error";
        header("location:registration.php");
    }
}


?>