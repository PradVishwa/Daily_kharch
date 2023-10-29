<?php
include "connection.php";


// header section 
include("header.php");
?>

<!-- login form  -->
<main class="m-lg-5 m-sm-5 m-5 justify-content-md-center justify-content-sm-around d-lg-flex">
    <div class="cord my-sm-3">
        <form action="index_code.php" method="post">
            <h1 class="text-center mb-5"><span class="D">D</span>aily <span class="K">K</span>harch<h1>
                    <h3 class="h3 mb-3 fw-normal text-sm-center text-lg-start bold">Please sign in</h3>
                    <div class="mb-3 ">
                        <label for="exampleInputEmail1" class="form-label"><i class='bx bx-envelope'></i> Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3 ">
                        <label for="exampleInputPassword1" class="form-label"><i class='bx bx-lock-alt'></i> Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                    </div>
                    <div class="m-auto d-block ">
                        <button type="submit" name="login" class="btn btn-primary input-group">Submit</button>
                    </div>
        </form>
        <div class="my-2">
            <!-- Button trigger modal -->
            <span type="button" data-bs-toggle="modal" data-bs-target="#create" class="text-success">Create an account!</span><br>
            <!-- modal  -->
            <div class="modal fade" id="create" tabindex="-1" aria-labelledby="createLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog modal-sm">
                    <div class="modal-content">
                        <form action="registration_code.php" method="POST">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="createLabel"><span class="D">Regis</span><span class="K">tration</span></h1>
                            </div>
                            <div class="modal-body">
                                <div class="row my-2">
                                    <div class=" col-sm-4 my-2">
                                        <input type="text" name="name" id="" placeholder="fullname*" require>
                                    </div>
                                    <div class=" col-sm-4 my-2">
                                        <input type="number" name="mobile" id="" placeholder="valid mobile no.*" require>
                                    </div>
                                    <div class=" col-sm-4 my-2">
                                        <input type="email" name="email" id="" placeholder="email address" require>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class=" col-sm-4 my-2">
                                        <textarea name="address" id="" cols="20" rows="" placeholder="Address"></textarea>
                                    </div>
                                    <div class=" col-sm-4 my-2">
                                        <input type="password" name="password" id="" placeholder="password">
                                    </div>
                                    <div class=" col-sm-4 my-2">
                                        <input type="password" name="re_password" id="" placeholder="Re-password">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success" name="register">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Button trigger modal -->
            <span type="button" data-bs-toggle="modal" data-bs-target="#forgate" class="text-danger">forgate password?</span>
        </div>
    </div>
</main>

<!-- footer  -->
<?php
include("footer.php");


?>