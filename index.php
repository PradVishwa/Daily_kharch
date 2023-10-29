<?php

// header section 
include("header.php");
?>

    <!-- login form  -->
    <main class="m-lg-5 m-sm-5 m-5 justify-content-md-center justify-content-sm-around d-lg-flex">
        <form action="index_code.php" method="post">
            <div class="cord my-sm-3">
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
                            <button type="submit" class="btn btn-primary input-group">Submit</button>
                        </div>
                        <a href="registration.php">Create an account!</a><br>
                        <!-- <a href="#">forgate password?</a> -->
            </div>
        </form>
    </main>

    <!-- footer  -->
    <?php
    include("footer.php");
    ?>

