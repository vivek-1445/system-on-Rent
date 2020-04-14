

<?php

include ('database.php');

include "header.php"; ?>
<?php include "left-sider.php"; ?>


<?php

    if (isset($_POST['change'])) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $conform_password = $_POST['conform_password'];
        $mobile = $_POST['mobile'];
        $gender = $_POST['gender'];

        if (isset($_GET['id'])) {
            $update_id = $_GET['id'];
            $update = "update user set `name`='$name',`email`='$email',`password`='$password',`conform_password`='$conform_password',
                                      `mobile`='$mobile',`gender`='$gender'  where `id`='$update_id'";
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

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->



    <!-- Main content -->
    <section class="content">



        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="register-logo">
                        <a><b>Change </b>Details</a>
                    </div>
                    <form  method="post" id="form">
                        <div class="form-group has-feedback">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Full name">
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <input type="password" class="form-control" name="conform_password" id="conform_password" placeholder="Retype password">
                            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                        </div>

                        <div class="form-group has-feedback">
                            <input type="number" class="form-control" name="mobile" placeholder="Enter mobile number">
                            <span class="glyphicon glyphicon-earphone form-control-feedback"></span>
                        </div>
                        <h4>Select Gender</h4>
                        <div class="form-group has-feedback">
                            <input type="radio"  name="gender" value="Male">&nbsp;Male &nbsp;
                            <input type="radio"   name="gender" value="Female">&nbsp;Female
                        </div>
                        <div class="row">

                            <!-- /.col -->
                            <div class="col-xs-4">
                                <button type="submit" name="change"   class="btn btn-primary"  >
                                    <i class="ion-android-checkmark-circle"></i>
                                    Change
                                </button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>
                </div>

                <div class="col-sm-1">
                </div>
                <div class="container">
                    <div class="row">
                       <div class="col-sm-5">

                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include "footer.php"; ?>
<?php include "right-sider.php"; ?>


