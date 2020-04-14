<?php session_start(); ?>
<?php

include 'database.php';


/*delete data*/

if (isset($_GET['id'])) {
  $id1 = $_GET['id'];
  $del1 = "delete from item where `item_id`='$id1'";
  $fire1 = mysqli_query($database_connection,$del1);
}

//get user id and data

$id = $_SESSION['user']['id'];
$e = "select * from item WHERE `user_id`='$id'";
$fire = mysqli_query($database_connection, $e);


?>

<style xmlns="http://www.w3.org/1999/html">

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
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Data Tables</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">

          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sr.no</th>
                  <th>Item type</th>
                  <th>Item description</th>
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

                <?php while($w1 = mysqli_fetch_array($fire)){ ?>
                  <tr>
                    <td><?php echo ++$counter; ?></td>
                    <td><?php echo @$w1['item_type']; ?></td>
                    <td><?php echo @$w1['item_description']; ?></td>
                    <td><?php echo @$w1['rant_type']; ?></td>
                    <td><?php echo @$w1['item_rant']; ?></td>
                    <td><?php echo @$w1['item_status']; ?></td>
                    <td><img src="images/<?php echo @$w1['image']; ?>"  class="zoom"></td>
                    <td><a href="view-item.php?id=<?php echo $w1['item_id']; ?>"><span class="fa fa-trash-o"></span></a></td>
                    <td><a href="add-item.php?id=<?php echo $w1['item_id']; ?>"><span class="fa fa-edit"></span></a></td>
                    <td><a href="Proparty-rent.php?id=<?php echo $w1['item_id']; ?>"><span>Rent</span></a></td>
                  </tr>
                <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    <!-- /.content -->
  </div>
    </section>
</div>
  <!-- /.content-wrapper -->
  <?php include ('footer.php'); ?>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
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
</body>
</html>
