
<?php

include ('database.php');

if(isset($_POST['signup']))
{

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $conform_password = $_POST['conform_password'];


    $insert_update = "insert into user(`name`,`email`,`password`,`conform_password`)values ('$name','$email','$password','$conform_password')";

    $fire_query = mysqli_query($database_connection,$insert_update);

}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE | Registration Page</title>
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
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a><b>Admin</b>LTE</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Register a new membership</p>

    <form  method="post" id="form">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="name" id="name" placeholder="Full name"
               data-bv-notempty="true" data-bv-notempty-message="This field is required." data-bv-field="name">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
          <span id="error_name"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" name="email" id="email" placeholder="Email"
               data-bv-notempty="true" data-bv-notempty-message="This field is required." data-fv-emailaddress-message="The value is not a valid email address"
               data-fv-field="email"  data-bv-field="email" >
        <span class="glyphicon glyphicon-envelope form-control-feedback" id="error_email"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" id="password" placeholder="Password"
               data-bv-notempty="true" autocomplete="off" data-bv-notempty-message="This field is required."data-bv-stringlength="true"
               data-bv-different="true" data-bv-different-field="name"
               data-bv-different-message="The password cannot be the same as your name" data-bv-field="password">
        <span class="glyphicon glyphicon-lock form-control-feedback" id="password"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="conform_password" id="conform_password" placeholder="Retype password"
               data-bv-notempty="true" data-bv-notempty-message="This field is required." data-bv-identical="true"
               data-bv-identical-field="password"
               data-bv-identical-message="The password not matched." data-bv-field="confirm_password">
        <span class="glyphicon glyphicon-log-in form-control-feedback" id="error_conform_password"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> I agree to the <a href="#">terms</a>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" name="signup"   class="btn btn-primary"  >
              <i class="ion-android-checkmark-circle"></i>
              Sign up
              </button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using
        Google+</a>
    </div>

    <a href="login.php" class="text-center">I already have a membership</a>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>

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


</body>
</html>
