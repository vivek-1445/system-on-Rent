
<?php
include 'database.php';
session_start();


if(isset($_SESSION['user']['id'])!='')
{
  header('location:login.php');
}

          if (isset($_POST['login']))
          {
              $email = $_POST['email'];
              $password = $_POST['password'];
                  $compare_data = "select * from user where `email`='$email' AND `password`='$password'";
                  $compare_data = mysqli_query($database_connection,$compare_data);
                  $number_of_data = mysqli_num_rows($compare_data);
                      if ($number_of_data == 1)
                      {
                        $fetch_compare_data = mysqli_fetch_array($compare_data);
                        $_SESSION['user']=$fetch_compare_data;
                        // header('location:index.php');
                        if($_SESSION['user']['user_type'] == 'admin')
                          {
                            header('location:Admin/marchant-data.php');
                          }
                          else
                          {
                            header('location:view-item.php');
                          }
                      }
                      else
                      {
                        $msg = "Invalid email & password";
                      }

          }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Log in</title>
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
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

  <link rel="stylesheet" href="formValidation.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <style>

        .psw{

            margin-left: 3px;
            color: #1F618D;
            font-size: smaller;
        }
        .check{
            margin-bottom: 20px;
            width: 15px;
            height: 15px;
        }

    </style>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
     <b>Admin</b>LTE
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>
      <span style="color: #dd4b39;"><?php echo @$msg ?></span>
    <form  id="form" method="post" autocomplete="off">
      <div class="form-group has-feedback">
        <input type="email" class="form-control" name="email"   placeholder="Email" autocomplete="false"
               data-bv-notempty="true" id="email" data-bv-notempty-message="Email address is required and cannot be empty"
               data-fv-emailaddress-message="The value is not a valid email address"
               data-fv-field="email" value="">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" id="myInput" name="password" placeholder="Password"
               data-bv-notempty="true" data-bv-notempty-message="The password is required and cannot be empty"
               data-bv-stringlength="true" value="" data-bv-different="true" data-bv-different-field="email">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          <input  type="checkbox" class="check" onclick="myFunction()"><span class="psw">Show Password</span>
      </div>

      <div class="row">
        <div class="col-xs-8">

        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <input type="submit" value="log In" name="login" class="btn btn-primary btn-block btn-flat">
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a>
    </div>
    <!-- /.social-auth-links -->

    <a href="#">I forgot my password</a><br>
    <a href="register.php" class="text-center">Register a new membership</a>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>

<script src="formValidation.min.js"></script>


<!--validation script-->
<script>
  jQuery(document).ready(function () {
    jQuery('#form').bootstrapValidator();
  });

</script>




<!--hide and show password script-->
<script>
    function myFunction() {
        var x = document.getElementById("myInput");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>

</body>
</html>
