<?php
include 'database.php';
?>
<?php

if (isset($_POST['submit'])) {
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    echo $compare_data = "select * from `Front-user` where `user_name`='$user_name' AND `password`='$password'";
    $compare_data1 = mysqli_query($database_connection, $compare_data);

    if ($compare_data1 == 1) {
        ?>
        <script type="text/javascript">
            window.location.href = "index.php ?>";
        </script>
    <?php } else { ?>

        <?php $msg = "Enter Valid User Name & password"; ?>

    <?php } ?>


<?php } ?>

    <!doctype html>
    <html lang="en" xmlns="http://www.w3.org/1999/html">
    <head>
        <title>YourAgent &mdash; Colorlib Website Template</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Mukta+Mahee:200,300,400|Playfair+Display:400,700"
              rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/aos.css">
        <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
        <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
        <!-- Theme Style -->
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
    <header class="site-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-4 site-logo" data-aos="fade"><a href="index.php">YourAgent</a></div>
                <div class="col-8">
                    <div class="site-menu-toggle js-site-menu-toggle" data-aos="fade">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <!-- END menu-toggle -->
                    <div class="site-navbar js-site-navbar">
                        <nav role="navigation">
                            <div class="container">
                                <div class="row full-height align-items-center">
                                    <div class="col-md-6">
                                        <ul class="list-unstyled menu">
                                            <li class="active"><a href="index.php">Home</a></li>
                                            <li><a href="about.php">About</a></li>
                                            <li><a href="blog.php">Blog</a></li>
                                            <li><a href="contact.php">Contact</a></li>
                                            <li><a href="login.php" target="_blank">Add Your Proparty</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 extra-info">
                                        <div class="row">
                                            <div class="col-md-6 mb-5">
                                                <h3>Contact Info</h3>
                                                <p>98 West 21th Street, Suite 721 <br> New York NY 10016</p>
                                                <p>info@yourdomain.com</p>
                                                <p>(+1) 435 3533</p>
                                            </div>
                                            <div class="col-md-6">
                                                <h3>Connect With Us</h3>
                                                <ul class="list-unstyled">
                                                    <li><a href="#">Twitter</a></li>
                                                    <li><a href="#">Facebook</a></li>
                                                    <li><a href="#">Instagram</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- END head -->
    <section class="site-hero overlay" style="background-image: url(img/hero_1.jpg)">
        <div class="container">
            <div class="row site-hero-inner align-items-center">
                <div class="col-md-7 text-left ml-auto">
                    <h1 class="heading" data-aos="fade-up">I'm Your Realtor, Get Your Key</h1>
                    <p class="sub-heading mb-5" data-aos="fade-up" data-aos-delay="100">Discover our world-class <b>HOME,FARMHOUSE,BUNGLOWS</b>.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section bg-primary contact-section" id="next-section" xmlns="http://www.w3.org/1999/html">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <form action="index.php" method="post" enctype="multipart/form-data" style="margin-top: -670px">
                        <h1 style="margin-left: 15px; color: #5190c7;">LOG IN</h1>
                        <span style="color: red;margin-left: 15px;"><?php echo @$msg; ?></span>
                        <div class="col-md-8 form-group">
                            <label for="name"><b>User Name</b></label>
                            <input type="text" id="name" name="user_name" class="form-control"
                                   style="font-size:20px; color: #4b8edc;">
                        </div>
                        <div class="col-md-8 form-group">
                            <label for="name"><b>Password</b></label>
                            <input type="password" id="name" name="password" class="form-control"
                                   style="font-size:20px; color: #4b8edc; ">
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input style="margin-left: 15px;" type="submit" value="Login" name="submit"
                                       class="btn btn-primary">
                                <a  href="Front_register.php"
                                   class="btn uppercase btn-primary" style="margin-left: 80%; margin-top: -30%;" >Sign Up</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    </body>
    </html>
<?php include 'Front.footer.php'; ?>