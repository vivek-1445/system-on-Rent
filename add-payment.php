<?php include "header.php"; ?>
<?php include "left-sider.php"; ?>
<?php
include('database.php');
if (isset($_POST['submit'])) {
    $item_rent_id = $_POST['item_id'];
    $rent_entry_date = $_POST['rent_entry_date'];
    $rent_from_date = $_POST['rent_from_date'];
    $rent_to_date = $_POST['rent_to_date'];
    $totle_rent_amount = $_POST['totle_rent_amount'];
    $current_rent_amount = $_POST['current_rent_amount'];
    @$due_rent_amount = $totle_rent_amount - $current_rent_amount;
    $payment_type = $_POST['payment_type'];
    @$status = $_POST['status'];


    $insert_payment = "insert into renter_payment(`item_rent_id`,`rent_entry_date`,`payment_from_date`,`payment_to_date`,`total_rent_amount`,`current_rent_amount`,`due_amount`,`payment_type`,`payment_status`)
                                                       values ('$item_rent_id','$rent_entry_date','$rent_from_date','$rent_to_date','$totle_rent_amount','$current_rent_amount','$due_rent_amount','$payment_type','$status')";

    $fire_insert_payment = mysqli_query($database_connection, $insert_payment);


}
$id = $_SESSION['user']['name'];
$id1 = "select * from item JOIN item_rent_details ON item.item_id=item_rent_details.item_id where `user_name`='$id'";
$fire = mysqli_query($database_connection, $id1);


?>
    <html>
    <head>
        <title>Add Payment</title>
    </head>
    <style>
        .form-control{
            width: 37%;
        }
    </style>
    <body>
        <div class="content-wrapper">
            <section class="content">
                <ol class="breadcrumb">
                    <li><a href="javascript:history.go(-1)"><span class="fa fa-arrow-left"></span></a></li>
                    <li><a href="view-item.php"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="view-item.php">view item</a></li>
                    <li><a href="#">Renter</a></li>
                    <li><a href="#">Payment</a></li>
                    <li class="active">Add Payment</li>
                </ol>
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="form-group">
                        <div class="control-group">
                            <div class="controls">
                                <label class="control-label">Active Renter Name:</label>
                                <form method="post" enctype="multipart/form-data">
                                    <select class="form-control" name="item_id">
                                        <?php while ($w1 = mysqli_fetch_array($fire)):; ?>
                                            <option value="<?php echo $w1['item_rent_id']; ?>">
                                                &nbsp;<?php echo $w1['renter_name']; ?>
                                            </option>
                                        <?PHP endwhile; ?>
                                    </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="control-group">
                            <label class="control-label">Rant Entry date:</label>
                            <div class="controls">
                                <input type="date" class="form-control" name="rent_entry_date">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="control-group">
                            <label class="control-label">Rant From date:</label>
                            <div class="controls">
                                <input type="date" class="form-control" name="rent_from_date">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="control-group">
                            <label class="control-label">Rant To date:</label>
                            <div class="controls">
                                <input type="date" class="form-control" name="rent_to_date" >
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="control-group">
                            <label class="control-label">Totle Rent Amount:</label>
                            <div class="controls">
                                <input type="number" class="form-control" name="totle_rent_amount"
                                       placeholder="Enter Totle Rent Amount">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="control-group">
                            <label class="control-label">Current Rent Amount:</label>
                            <div class="controls">
                                <input type="number" class="form-control" name="current_rent_amount"
                                       placeholder="Enter Totle Current Rent Amount">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="control-group">
                            <label class="control-label">Select Payment Type:</label>
                            <div class="controls">
                                <select class="form-control" name="payment_type">
                                    <option value="Card">Card
                                    <option value="Cheque">Cheque
                                    <option value="BankTransfers">Bank Transfers
                                    <option value="Cash">Cash
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group has-feedback">
                        <label class="control-label">Select Payment status</label>
                        <div></div>
                        <input type="radio" name="status" value="complated">&nbsp;<b>Completed</b>&nbsp;<br>
                        <input type="radio" name="status" value="notcomplated">&nbsp;<b>Not Completed</b>
                    </div>
                    <input type="submit" name="submit" class="btn btn-primary" value="submit">
                    </form>
                </section>
        </div>
    </body>
    </html>
    <!-- /.content-wrapper -->
<?php include "footer.php"; ?>
<?php include "right-sider.php"; ?>