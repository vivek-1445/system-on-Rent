<?php
include 'database.php';

if (isset($_POST['submitreview'])) {
    $first_name = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $email = $_POST['email'];

    $insert_user = "insert into `Front-user` (`first_name`,`last_name`,`user_name`,`mobile`,`password`,`confirm_password`,`email`) values('$first_name','$lastname','$username','$phone','$password','$confirm_password','$email')";

    $fire_insert = mysqli_query($database_connection, $insert_user);
}


?>
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


    <section class="section bg-primary contact-section" id="next-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <form method="post" enctype="multipart/form-data" style="margin-top: -670px;">
                        <h1 style="color: #5190c7;">REGISTER</h1>
                        <div class="row">
                            <div class="col-md-4 form-group">
                                <label for="name"><b>First Name</b></label>
                                <input type="text" id="firstname" name="firstname" class="form-control"
                                       style="color: #4b8edc;">
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="name"><b>Last Name</b></label>
                                <input type="text" id="lastname" name="lastname" class="form-control "
                                       style="color: #4b8edc;">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 form-group">
                                <label for="phone"><b>User Name</b></label>
                                <input type="text" id="username" name="username" class="form-control "
                                       style="color: #4b8edc;">
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="phone"><b>Phone</b></label>
                                <input type="number" id="phone" name="phone" class="form-control "
                                       style="color: #4b8edc;">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 form-group">
                                <label for="phone"><b>password</b></label>
                                <input type="password" id="password" name="password" class="form-control "
                                       style="color: #4b8edc;">
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="phone"><b>Confirm password</b></label>
                                <input type="password" id="confirm_password" name="confirm_password"
                                       class="form-control " style="color: #4b8edc;">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 form-group">
                                <label for="email"><b>Email</b></label>
                                <input type="email" id="email" name="email" class="form-control "
                                       style="color: #4b8edc;">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 form-group">
                                <input type="submit" value="Register" name="submitreview" class="btn btn-primary">
                                <a href="Front_login.php" class="btn btn-primary" style="margin-left: 140%; margin-top: -47%;">Log In</a>
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