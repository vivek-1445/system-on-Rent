<?php include "header.php"; ?>
<?php include "left-sider.php"; ?>
<?php

include '../database.php';


/*delete data*/
if (isset($_GET['id'])) {
    $id1 = $_GET['id'];
    $e = "select * from item WHERE `user_id`='".$id1."'";
    $fire = mysqli_query($database_connection, $e);
}
if (isset($_GET['item_id'])) {

    $id1 = $_GET['item_id'];
    $e = "select * from item WHERE `item_id`='".$id1."'";
    $fire = mysqli_query($database_connection, $e);
    $row = $fire->fetch_array();
    $userId = 0;
    if(isset($row['user_id'])){
        $userId = $row['user_id'];
    }

    $id1 = $_GET['item_id'];
    $del1 = "delete from item where `item_id`='$id1'";
    $fire1 = mysqli_query($database_connection,$del1);
    ?>
    <script type="text/javascript">
       window.location.href = "view-useritem.php?id=<?= $userId ?>";
    </script>
    <?php } ?>

<style>

    /*image animation*/

    .zoom {
        padding: 1px;
        background-color: grey;
        transition: transform .3s;
        width: 50px;
        height: 50px;
        margin: 0 auto;

    }

    .zoom:hover {
        -ms-transform: scale(3.5); /* IE 9 */
        -webkit-transform: scale(3.5); /* Safari 3-8 */
        transform: scale(3.5);
    }
</style>

<div class="content-wrapper">
    <form method="post">
    <section class="content">
        <ol class="breadcrumb">
            <li><a href="javascript:history.go(-1)"><span class="fa fa-arrow-left"></span></a></li>
            <li><a href="marchant-data.php"><i class="fa fa-dashboard"></i>Home</a></li>
            <li><a href="marchant-data.php"></i>Marchant Deatails</a></li>
            <li class="active">Uploded User Item</li>

        </ol>
         <div class="box">
             <div class="box-header">
            <h3 class="box-title"><b><u>Uploded User Item</u></b></h3>
        </div>

            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Sr.no</th>
                    <th>Item type</th>
                    <th>Item description</th>
                    <th>Item type</th>
                    <th>Item rant</th>
                    <th>Item status</th>
                    <th>Image</th>
                    <th>Delete</th>
                    <th>Edit</th>
                    <th>Rent</th>
                </tr>
                </thead>
                <tbody>
                <?php $counter = 0;  ?>

                <?php while($w1 = mysqli_fetch_array($fire)){ ?>
                    <tr>
                        <td><?php echo ++$counter;?></td>

                        <td><?php echo @$w1['item_type']; ?></td>
                        <td><?php echo @$w1['item_description']; ?></td>
                        <td><?php echo @$w1['rant_type']; ?></td>
                        <td><?php echo @$w1['item_rant']; ?></td>
                        <td><?php echo @$w1['item_status']; ?></td>
                        <td><img src="images/<?php echo @$w1['image']; ?>" width="60" class="zoom"></td>
                        <td><a href="view-useritem.php?item_id=<?php echo $w1['item_id']; ?>" class="btn btn-danger btn-md delete-data"><span class="fa fa-trash-o"></span>Delete</a></td>
                        <td><a href="add-item.php?id=<?php echo $w1['item_id']; ?>" class="btn btn-primary btn-md edit-data"><span name="edit" class="fa fa-edit">Edit</span></a></td>
                        <td><a href="view-Proparty-renter-details.php?id=<?php echo $w1['item_id']; ?>" class="btn btn-info btn-md v-data"><span>Rent</span></a></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>

   
        </div>
         </section>
    </form>
</div>
<!-- /.content-wrapper -->
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

