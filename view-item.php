<?php include "header.php"; ?>
<?php include "left-sider.php"; ?>
<?php
include 'database.php';

/*delete data*/

if (isset($_GET['id'])) {
    $id1 = $_GET['id'];
    $del1 = "delete from item where `item_id`='$id1'";
    $fire1 = mysqli_query($database_connection, $del1);
}

//get user id and data

$id = $_SESSION['user']['id'];
$e = "select * from item WHERE `user_id`='$id'";
$fire = mysqli_query($database_connection, $e);


?>
<html>
<head>
    <title>View Item</title>
<link rel="stylesheet" href="css/view-item.css">
</head>
<body>
<div class="content-wrapper">
    <form action="add-item.php">

        <!-- Main content -->
        <section class="content">
            <ol class="breadcrumb">

                <li><a href="view-item.php"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">view Item</li>
            </ol>
            <!-- /.box -->
            <div class="box">

                <div class="box-header">
                    <h3 class="box-title"><b><u>Uploded Item</u></b></h3>
                </div>

                <button><i class="fa fa-plus"></i>Add Item</button>

                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Sr.no</th>
                            <th>Item type</th>
                            <th>Item description</th>
                            <th>Country</th>
                            <th>state</th>
                            <th>city</th>
                            <th>Item Rent type</th>
                            <th>Item rant</th>
                            <th>Item status</th>
                            <th>Image</th>
                            <th>Delete</th>
                            <th>Edit</th>
                            <th>Rent</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $counter = 0; ?>
                        <?php while ($w1 = mysqli_fetch_array($fire)) { ?>
                            <tr>
                                <td><?php echo ++$counter; ?></td>
                                <td><?php echo @$w1['item_type']; ?></td>
                                <td><textarea disabled rows="4" cols="19" class="textareas"><?php echo @$w1['item_description']; ?></textarea>
                                </td>
                                <td><?php echo @$w1['country']; ?></td>
                                <td><?php echo @$w1['state']; ?></td>
                                <td><?php echo @$w1['city']; ?></td>
                                <td><?php echo @$w1['rant_type']; ?></td>
                                <td><?php echo @$w1['item_rant']; ?></td>
                                <td><?php echo @$w1['item_status']; ?></td>
                                <td><img src="Admin/images/<?php echo @$w1['image1']; ?>" class="zoom"></td>
                                <td><a href="view-item.php?id=<?php echo $w1['item_id']; ?>"
                                       class="btn btn-danger btn-md delete-data"><span class="fa fa-trash-o"></span>Delete</a>
                                </td>
                                <td><a href="add-item.php?id=<?php echo $w1['item_id']; ?>"
                                       class="btn btn-primary btn-md edit-data"><span class="fa fa-edit"></span>Edit</a>
                                </td>
                                <td><a href="view-Proparty-renter-details.php?id=<?php echo $w1['item_id']; ?>"
                                       class="btn btn-info btn-md v-data"><span>Rent</span></a></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </section>

    </form>
</div>
</body>
</html>
<?php include "footer.php"; ?>
<?php include "right-sider.php"; ?>
<script>
    $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable({
            'paging': true,
            'lengthChange': false,
            'searching': false,
            'ordering': true,
            'info': true,
            'autoWidth': false
        })
    })
</script>