<?php include "header.php"; ?>
<?php include "left-sider.php"; ?>
<?php
include '../database.php';



//if(@$_GET['id'] && @$_GET['status']=='notcomplated')
//{
//    $id = $_GET['id'];
//    $que = "update renter_payment set `payment_status`='complated' where `renter_payment_id`='$id'";
//    mysqli_query($database_connection,$que);
//}
//payment data

    $data = $_GET['id'];
    $select = "select * from renter_payment where `item_rent_id`='$data' ";
    $fire = mysqli_query($database_connection, $select);




?>
<style>
    /*image animation*/
    .zoom {
        padding: 1px;
        background-color: grey;
        transition: transform .3s;
        width: 70px;
        height: 70px;
        margin: 0 auto;
    }
    .zoom:hover {
        -ms-transform: scale(3.5); /* IE 9 */
        -webkit-transform: scale(3.5); /* Safari 3-8 */
        transform: scale(3.5);
    }
</style>
<form action="add-payment.php">
    <div class="content-wrapper">
        <!-- Main content -->x
        <section class="content">

            <ol class="breadcrumb">
                <li><a href="javascript:history.go(-1)"><span class="fa fa-arrow-left"></span></a></li>
                <li><a href="marchant-data.php"><i class="fa fa-dashboard"></i>Home</a></li>
                <li><a href="marchant-data.php"></i>Marchant Deatails</a></li>
                <li><a href="#"></i>Uploded User Item</a></li>
                <li><a href="#"></i>Renter Deatils</a></li>
                <li class="active">Renter Payment</li>

            </ol>
            <!-- /.box -->
            <div class="box">

                <div class="box-header">
                    <h3 class="box-title"><b><u>Uploded Item</u></b></h3>
                </div>

                <button style="font-size:15px; color: #3c8dbc; margin-left:89%;"><i class="fa fa-plus"></i>Add Payment</button>

                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Sr.no</th>
                            <th>Rent Entry Date</th>
                            <th>Rent From Date</th>
                            <th>Rent To Date</th>
                            <th>Totle Rent Amount</th>
                            <th>Current Rent Amount</th>
                            <th>Due Rent Amount</th>
                            <th>Payment Type</th>
                            <th>Payment Status</th>
                            <th>Delete</th>
                            <th>Edit</th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php $counter = 0; ?>
                        <?php while($w1 = mysqli_fetch_array($fire)){ ?>
                            <tr>
                                <td><?php echo ++$counter; ?></td>
                                <td><?php echo @$w1['rent_entry_date']; ?></td>
                                <td><?php echo @$w1['payment_from_date']; ?></td>
                                <td><?php echo @$w1['payment_to_date']; ?></td>
                                <td><?php echo @$w1['total_rent_amount']; ?></td>
                                <td><?php echo @$w1['current_rent_amount']; ?></td>
                                <td><?php echo @$w1['due_amount']; ?></td>
                                <td><?php echo @$w1['payment_type']; ?></td>
                                <td>
                                    <?php if(@$w1['payment_status']=='notcomplated') { ?>
                                        <a href="Payment_details.php?id=<?php echo $w1['renter_payment_id']; ?>&status=notcomplated"><i class="fa fa-circle text-red">notComplated</i></a>
                                    <?php }
                                    else {?>
                                        <a href="Payment_details.php?id=<?php echo $w1['renter_payment_id']; ?>&status=complated"><i class="fa fa-circle text-success">Complated</i></a>
                                    <?php } ?>
                                </td>

                                <td><a href="Payment_details.php?deleteid=<?php echo $w1['renter_payment_id']; ?>" class="btn btn-danger btn-md delete-data"><span class="fa fa-trash-o"></span>Delete</a></td>
                                <td><a href="add-item.php?id=<?php echo $w1['renter_payment_id']; ?>" class="btn btn-primary btn-md edit-data"><span class="fa fa-edit" ></span>Edit</a></td>

                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </section>
    </div>
</form>
<?php include "footer.php"; ?>
<?php include "right-sider.php"; ?>
<script>
    $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable({
            'paging'      : true,
            'lengthChange': false,
            'searching'   : false,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false
        })
    })
</script>