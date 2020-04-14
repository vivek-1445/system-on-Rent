<?php
include ('session-start.php');

include 'database.php';
if(isset($_SESSION['user']['id'])=='')
{
    header('location:login.php');
}



?>
<?php
if (isset($_POST['change'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    @$gender = $_POST['gender'];

    if (isset($_GET['id'])) {
        $update_id = $_GET['id'];
        $update = "update user set `name`='$name',`email`='$email',`mobile`='$mobile',`gender`='$gender'  where `id`='$update_id'";
        mysqli_query($database_connection, $update);

    }


}

if (isset($_GET['id'])){

    $update_id = $_GET['id'];
    $data_get = "select * from user where `id`='$update_id'";
    $fire_query = mysqli_query($database_connection,$data_get);
    $array = mysqli_fetch_array($fire_query);

}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="plugins/iCheck/square/blue.css">
    <link rel="stylesheet" href="formValidation.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="bower_components/morris.js/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <!-- form validatio -->
    <link rel="stylesheet" href="formValidation.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <![endif]-->
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <header class="main-header">
        <!-- Logo -->
        <a href="#" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>A</b>LT</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Admin</b>LTE</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Tasks: style can be found in dropdown.less -->
                    <li class="dropdown tasks-menu">
                        <ul class="dropdown-menu">
                            <li class="header">You have 9 tasks</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li>
                                        <!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                Design some buttons
                                                <small class="pull-right">20%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">20% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                    <li>
                                        <!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                Create a nice theme
                                                <small class="pull-right">40%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar"
                                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">40% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                    <li>
                                        <!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                Some task I need to do
                                                <small class="pull-right">60%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"
                                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                    <li>
                                        <!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                Make beautiful transitions
                                                <small class="pull-right">80%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar"
                                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">80% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="#">View all tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                            <span class="hidden-xs"><?php echo "Wel-Come"; ?>&nbsp;<?php echo $_SESSION['user']['name'];?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                <p>
                                    <?php echo $_SESSION['user']['name'];?> - User
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <li class="user-body">
                                <div class="row">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Followers</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Sales</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Friends</a>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <button class="btn btn-primary " data-toggle="modal" data-target="#myModal">
                                        Update
                                    </button>
                                </div>
                                <div class="pull-right">
                                    <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!--  popup cording-->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel"><b><u>Update Profile</u></b></h4>
                </div>
                <div class="modal-body">
                    <form  method="post" action="view-item.php" id="form" >
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Custom Tabs -->
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#tab_1" data-toggle="tab">Update Details</a></li>
                                    <li><a href="#tab_2" data-toggle="tab">Change Password</a></li>
                                    <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab_1">
                                        <!--                    Edit details in popup-->
                                        <label>Enter Name:</label>
                                        <div class="form-group has-feedback">
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Full name" value="<?php echo $_SESSION['user']['name']; ?>"
                                                   data-bv-notempty="true" data-bv-notempty-message="This field is required." data-bv-field="name">
                                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                            <span id="error_name"></span>
                                        </div>
                                        <label>Enter Email:</label>
                                        <div class="form-group has-feedback">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Email"  value="<?php echo $_SESSION['user']['email']; ?>"
                                                   data-bv-notempty="true" data-bv-notempty-message="This field is required." data-fv-emailaddress-message="The value is not a valid email address"
                                                   data-fv-field="email"  data-bv-field="email" >
                                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                        </div>
                                        <label>Enter Mobile:</label>
                                        <div class="form-group has-feedback">
                                            <input type="number" class="form-control" name="mobile" placeholder="Enter mobile number" value="<?php echo $_SESSION['user']['mobile']; ?>"
                                                   data-bv-notempty="true"  data-bv-notempty-message="This field is required.">
                                            <span class="glyphicon glyphicon-earphone form-control-feedback"></span>
                                        </div>
                                        <h4>Select Gender</h4>
                                        <div class="form-group has-feedback">
                                            <input type="radio" style="height:15px; width:15px; " name="gender" value="Male" <?php if($_SESSION['user']['gender'] == 'Male'){echo 'checked';} ?>>&nbsp;<font style="font-size: 18px;  ">Male</font> &nbsp;<br>
                                            <input type="radio" style="height:15px; width:15px; " name="gender" value="Female" <?php if($_SESSION['user']['gender'] == 'Female'){echo 'checked';} ?>>&nbsp;<font style="font-size: 18px;  ">Female</font>
                                        </div>
                                    </div>
                                    <!--                  chnage password-->
                                    <div class="tab-pane" id="tab_2">
                                        <div class="form-group has-feedback">
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Old Password"
                                                   data-bv-notempty="true" data-bv-notempty-message="This field is required." data-bv-field="name">
                                            <span class="fa fa-key icon form-control-feedback"></span>
                                            <span id="error_name"></span>
                                        </div>
                                        <div class="form-group has-feedback">
                                            <input type="password" class="form-control" name="password" id="password" placeholder="Password"
                                                   data-bv-notempty="true" autocomplete="off" data-bv-notempty-message="This field is required."data-bv-stringlength="true"
                                                   data-bv-different="true" data-bv-different-field="name"
                                                   data-bv-different-message="The password cannot be the same as your name" data-bv-field="password">
                                            <span  class="glyphicon glyphicon-lock form-control-feedback"></span>
                                        </div>
                                        <div class="form-group has-feedback">
                                            <input type="password" class="form-control" name="conform_password" id="conform_password" placeholder="Retype password"
                                                   data-bv-notempty="true" data-bv-notempty-message="This field is required." data-bv-identical="true"
                                                   data-bv-identical-field="password"
                                                   data-bv-identical-message="The password not matched." data-bv-field="confirm_password">
                                            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                                        </div>
                                    </div>
                                    <!-- /.tab-pane -->
                                </div>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <a href="view-item.php?id=<?php echo $_SESSION['user']['id']; ?>" id="change" name="change" class="btn btn-primary btn-md edit-data">Update</a>
<!--                    <input type="submit" id="change" name="change" class="btn btn-primary" value="Save changes" >-->
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Bootstrap 3.3.7 -->
    <!-- iCheck -->
    <script src="formValidation.min.js"></script>
    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' /* optional */
            });
        });
    </script>
    <script>
        jQuery(document).ready(function() {
            jQuery('#form').bootstrapValidator();
        });
    </script>