<?php include "header.php"; ?>
<?php include "left-sider.php"; ?>
<?php
include '../database.php';

/*delete data*/

$se = "select * from `renter_payment`";
$fire = mysqli_query($database_connection, $se);

 ?>
<form>
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <!-- /.box -->
            <div class="box">

                <div class="box-header">
                    <h3 class="box-title"><b><u>Uploded Item</u></b></h3>
                </div>

                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Sr.no</th>
                            <th>Rent Entry Date</th>
                            <th>Payment From Date</th>
                            <th>Payment To Date</th>
                            <th>Totle Rent Amount</th>
                            <th>Current Rent Amount</th>
                            <th>Due Amount</th>
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
                                <td><?php echo @$w1['payment_status']; ?></td>
                                <td><a href="#?id=<?php echo $w1['item_id']; ?>"><span class="fa fa-trash-o"></span></a></td>
                                <td><a href="#?id=<?php echo $w1['item_id']; ?>"><span class="fa fa-edit"></span></a></td>

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