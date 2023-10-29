
<?php
// database connection 
include "connection.php";

$email = $_SESSION['user'];
// echo $email;
// user name and id lena 
$query = "select * from tbl_user where email = '$email'";
$res = mysqli_query($con, $query);
$row = mysqli_fetch_array($res);

$user_id = $row['id'];

// user ka recard kitna kharch kiya kitna paya 
$query1 = "select * from tbl_kharch where user_id ='$user_id'";
$res1 = mysqli_query($con, $query1);

// total amount 
$query2 = "select sum(amount) as amount_sum from tbl_kharch where user_id='$user_id'";
$res2 = mysqli_query($con, $query2);
$row2 = mysqli_fetch_array($res2);

$query3 = "select sum(item_amount) as item_amount_sum from tbl_kharch where user_id='$user_id'";
$res3 = mysqli_query($con, $query3);
$row3 = mysqli_fetch_array($res3);

$total = $row2['amount_sum'] - $row3['item_amount_sum'];

//header section
include "header.php";
?>
</div>
</header>
<div class="container">
    <div class="row my-3 justify-content-md-between justify-content-center">
        <div class="col-sm-4 my-2 d-sm-flex">
            <div class="dropdown">
                <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bx bx-user bx-sm"></i>
                </span>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item text-primary" href="change_pass.php"><i class='bx bx-edit-alt'></i>Change Password</a></li>
                    <li><a class="dropdown-item text-danger" href="logout.php"><i class='bx bx-power-off'></i> Logout</a></li>

                </ul>
            </div>
            <span class="h3"><?php echo $row['name']; ?></span>
        </div>
        <div class="col-md-4 my-2">
            <span class="h3"><i class='bx bxl-gmail bx-sm text-warning'></i> <?php echo $row['email']; ?></span>
            <!-- <a href="logout.php" class="h3 text-decoration-none text-danger"><i class='bx bx-power-off bx-sm'></i>Logout</a> -->
        </div>
        <div class="col-sm-4 my-2">
            <span class="h5"> Amount = </span>
            <span class="h3 K"><?php echo $total; ?>.00</span><span class="h3">Rs</span>
        </div>
    </div>
    <div class="row my-3 justify-content-sm-center">

        <!--Kharch kiya Button trigger modal -->
        <div class="col-sm-3 my-3">
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#kharchKiya">Kharch KIya</button>
        </div>
        <!-- modal  -->
        <div class="modal fade" id="kharchKiya" tabindex="-1" aria-labelledby="kharchKiyaLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog modal-sm">
                <div class="modal-content">
                    <form action="kharch_kiya.php" method="POST">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="kharchKiyaLabel"><span class="D">K</span>harch <span class="K">K</span>iya</h1>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <input type="hidden" name="user_id" value="<?php echo $row['id']; ?>">

                                <div class="col-sm-4">
                                    <label for="">Item Name</label>
                                    <input type="text" name="item_name" id="" class="form-control">
                                </div>
                                <div class="col-sm-4">
                                    <label for="">Vivaran</label>
                                    <input type="text" name="item_qntt" id="" class="form-control">
                                </div>
                                <div class="col-sm-4">
                                    <label for="">Amount</label>
                                    <input type="number" name="item_amount" id="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success" name="sub">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <!--Kharch liya Button trigger modal -->
        <div class="col-sm-3 my-3">
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#kharchLiya">Kharch LIya</button>
        </div>
        <!-- modal  -->
        <div class="modal fade" id="kharchLiya" tabindex="-1" aria-labelledby="kharchLiyaLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog modal-sm">
                <div class="modal-content">
                    <form action="kharch_liya.php" method="POST">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="kharchLiyaLabel"><span class="D">K</span>harch <span class="K">L</span>iya</h1>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <input type="hidden" name="user_id" value="<?php echo $row['id']; ?>">
                                <div class="col-sm-4">
                                    <label for="">Kisane Diya</label>
                                    <input type="text" name="person" id="" class="form-control">
                                </div>
                                <div class="col-sm-4">
                                    <label for="">Amount</label>
                                    <input type="number" name="amount" id="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success" name="add">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- table content  -->
    <!-- <div class="row justify-content-center my-3">
        </div> -->
    <div class="card text-center">
        <div class="card-header">
            <span class="h3">All Rcords</span>
        </div>
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-success table-striped table-hover ">
                    <tr>
                        <th>S.No</th>
                        <th>Item name</th>
                        <th>Vivaran</th>
                        <th>Kharch Kiya</th>
                        <th>Kisane Diya</th>
                        <th>Kharch Liya</th>
                        <th>Date & Time</th>
                        <th>Delete</th>
                    </tr>
                    <?php
                    $i = 1;
                    while ($row1 = mysqli_fetch_array($res1)) {
                    ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $row1['item_name']; ?></td>
                            <td><?php echo $row1['item_qntt']; ?></td>
                            <td class="text-danger"><?php echo $row1['item_amount']; ?></td>
                            <td><?php echo $row1['person']; ?></td>
                            <td class="text-success"><?php echo $row1['amount']; ?></td>
                            <td><?php echo $row1['date']; ?></td>
                            <td>
                                <!-- Delete Button trigger modal -->
                                <a href="delete.php?id=<?php echo $row1['id']; ?>" class="btn btn-danger"> <i class="bx bx-trash"></i></a>
                            </td>
                        </tr>
                    <?php
                        $i++;
                    } ?>
                </table>
            </div>
        </div>
    </div>



</div>


<?php
//footer section
include "footer.php";

// kharch kiya php section

// if (isset($_POST['sub'])) {

//     $user_id = $_POST['user_id'];
//     $item_name = $_POST['item_name'];
//     $item_qntt = $_POST['item_qntt'];
//     $item_amount = $_POST['item_amount'];

//     $query = "insert into tbl_kharch(user_id, item_name, item_qntt, item_amount, person, amount, date, dor) values('$user_id','$item_name','$item_qntt','$item_amount','','',curdate(), now())";
//     mysqli_query($con, $query);

//     $_SESSION['status'] = "Data Inserted Successfully";
//     $_SESSION['status_code'] = "success";
//     // header("location:notes.php");
// }

// // kharch liya php section 

// if (isset($_POST['add'])) {
//     $user_id = $_POST['user_id'];
//     $person = $_POST['person'];
//     $amount = $_POST['amount'];

//     $query="insert into tbl_kharch(user_id, item_name, item_qntt, item_amount, person, amount, date, dor) values('$user_id','','','','$person','$amount',curdate(), now())";
//     mysqli_query($con, $query);

//     $_SESSION['status']="Data Inserted Successfully";
//     $_SESSION['status_code']="success";
// }


?>