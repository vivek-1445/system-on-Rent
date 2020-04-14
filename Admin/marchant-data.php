<?php include "header.php"; ?>
<?php include "left-sider.php"; ?>

<?php

include '../database.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $del = "delete from user where `id`='$id'";
    $fire1 = mysqli_query($database_connection, $del);
}


$e = "select * from user where `user_type` = 'user' ";
$fire = mysqli_query($database_connection, $e);
?>


<style>
    #div1 {
        font-size: 28px;

    }
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <form method="post">
        <section class="content">
            <ol class="breadcrumb">
                <li><a href="javascript:history.go(-1)"><span class="fa fa-arrow-left"></span></a></li>
                <li><a href="marchant-data.php"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Marchant Deatails</li>
            </ol>
            <!-- Content Header (Page header) -->
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><b><u>Marchant Deatails</u></b></h3>
                </div>
                <!-- Main content -->
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>

                        <th>Sr.no</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile number</th>
                        <th>Gender</th>
                        <th>Delete</th>
                        <th>Proparty</th>


                    </tr>
                    </thead>
                    <tbody>
                    <?php $counter = 0; ?>

                    <?php while ($w1 = mysqli_fetch_array($fire)) { ?>
                        <tr>
                            <td><?php echo ++$counter; ?></td>
                            <td><?php echo $w1['name']; ?></td>
                            <td><?php echo $w1['email']; ?></td>
                            <td><?php echo $w1['mobile']; ?></td>
                            <td><?php echo $w1['gender']; ?></td>
                            <td><a href="marchant-data.php?id=<?php echo $w1['id']; ?>"
                                   class="btn btn-danger btn-md delete-data"><span style=" font-size: 17px;"
                                                                                   class="fa fa-trash-o"></span>&nbsp;Delete</a>
                            </td>
                            <td><a href="view-useritem.php?id=<?php echo $w1['id']; ?>"
                                   class="btn btn-info btn-md v-data"><span style=" font-size: 19px;"
                                                                            class="fa fa-eye"></span>&nbsp;View</a></td>

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
            'paging': true,
            'lengthChange': false,
            'searching': false,
            'ordering': true,
            'info': true,
            'autoWidth': false
        })
    })
</script>




