<?php include "header.php"; ?>
<?php include "left-sider.php"; ?>
<?php
include('database.php');

if (isset($_POST['submit'])) {
    $item_id = $_POST['item_id'];
    $renter_name = $_POST['renter_name'];
    $renter_mobile = $_POST['renter_mobile_number'];
    $renter_address = $_POST['myTextarea'];
    $rent_strat_date = $_POST['rent_start_date'];
    $renter_deposite_amount = $_POST['deposite_amount'];
    $status = $_POST['status'];


    $insert = "insert into item_rent_details(`item_id`,`renter_name`,`renter_mobile_number`,`renter_address`,`rent_start_date`,`deposite_amount`,`status`)
                                         values('$item_id','$renter_name','$renter_mobile','$renter_address','$rent_strat_date','$renter_deposite_amount','$status')";
    $e = mysqli_query($database_connection, $insert);
}
//add user name in dropdown
$id1 = $_SESSION['user']['id'];
$id = "select * from item WHERE `user_id`='$id1'";
$fire = mysqli_query($database_connection, $id);

?>
    <head>

        <title>Add Proparty Renter Details</title>
    </head>
<style>
    .form-control{
        width: 37%;
    }
    h1{
        text-decoration:underline;
    }
</style>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <!-- Main content -->
        <section class="content">
            <ol class="breadcrumb">
                <li><a href="javascript:history.go(-1)"><span class="fa fa-arrow-left"></span></a></li>
                <li><a href="view-item.php"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="view-item.php">view item</a></li>
                <li><a href="#">View Proparty</a></li>
                <li class="active">Add Renter</li>
            </ol>
            <center>
                <h1>
                    Item Rent Details
                </h1>
            </center>
            <form method="post" enctype="multipart/form-data">
                <select class="form-control" name="item_id" >
                    <?php while ($w1 = mysqli_fetch_array($fire)):; ?>
                        <option value="<?php echo $w1['item_id']; ?>">
                            &nbsp;<?php echo $w1['item_type']; ?>
                        </option>
                    <?PHP endwhile; ?>
                </select>
                <div class="form-group">
                    <label>Renter Name:</label>
                    <input type="text" class="form-control" name="renter_name" id="exampleInputEmail1"
                           aria-describedby="emailHelp" placeholder="Enter Renter Name" >
                </div>
                <div class="form-group">
                    <label>Renter Mobile Number:</label>
                    <input type="number" class="form-control" name="renter_mobile_number" id="exampleInputEmail1"
                           aria-describedby="emailHelp" placeholder="Enter Renter Mobile Number">
                </div>
                <div class="form-group">
                    <div class="control-group">
                        <div class="controls">
                            <label>Renter Address </label>
                            <div></div>
                            <textarea class="form-control" name="myTextarea" id="myTextarea" class="summernote"
                                      placeholder="Enter Renter Address"></textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="control-group">
                        <label class="control-label">Rant starting date:</label>
                        <div class="controls">
                            <input type="date" class="form-control" name="rent_start_date"
                                   placeholder="Enter your rant start date" >
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Totle Deposite Amount:</label>
                    <input type="number" class="form-control" name="deposite_amount" id="exampleInputEmail1"
                           aria-describedby="emailHelp" placeholder="Enter Deposite Amount" >
                </div>
                <div class="form-group has-feedback">
                    <label class="control-label">Renter Status:</label>
                    <div></div>
                    <input type="radio" name="status" value="active">&nbsp;<b>active</b>&nbsp;<br>
                    <input type="radio" name="status" value="complated">&nbsp;<b>complated</b>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
        </section>
        <!-- /.content -->
    </div>
<?php include "footer.php"; ?>
<?php include "right-sider.php"; ?>