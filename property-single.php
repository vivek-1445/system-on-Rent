<?php
include 'session-start.php';
include 'database.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $que = "select * from `item` i INNER JOIN `user` u ON i.user_id = u.id WHERE `item_id`='$id'";
    $fire1 = mysqli_query($database_connection, $que);


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
    <link rel="stylesheet" href="css/property-single.css">

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
                                        <li><a href="index.php">Home</a></li>
                                        <li class="active"><a href="about.php">About</a></li>
                                        <li><a href="blog.php">Blog</a></li>
                                        <li><a href="contact.php">Contact</a></li>
                                        <li><a href="login.php">Add Your Proparty</a></li>
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
<?php while ($w1 = mysqli_fetch_array($fire1)) { ?>
    <section class="site-hero overlay page-inside" style="background-image: url(img/prop_single_img.jpg)">
        <div class="container">
            <div class="row site-hero-inner align-items-center">
                <div class="col-md-7 text-left mr-auto" data-aos="fade-up">
                    <h1 class="heading"><i class="fa fa-rupee"></i>&nbsp;<?php echo @$w1['item_rant']; ?></h1>
                </div>
            </div>
            <a href="#next-section" class="smoothscroll scroll-down">Scroll Down</a>
        </div>
    </section>
    <!-- END section -->
    <section class="section" id="next-section">
        <div class="container">
            <div class="row col-md-12">
                <div class="row col-md-7">
                    <div class="imgslider">
                        <div class="mySlides">
                            <div class="numbertext">1 / 3</div>
                            <img src="Admin/images/<?php echo @$w1['image1']; ?>" class="imagehw">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">2 / 3</div>
                            <img src="Admin/images/<?php echo @$w1['image2']; ?>" class="imagehw">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">3 / 3</div>
                            <img src="Admin/images/<?php echo @$w1['image3']; ?>" class="imagehw">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">4 / 4</div>
                            <img src="Admin/images/<?php echo @$w1['image4']; ?>" class="imagehw">
                        </div>
                        <a class="prev" onclick="plusSlides(-1)">❮</a>
                        <a class="next" onclick="plusSlides(1)">❯</a>
                        <div class="row" style="margin-left: 1px; margin-top: 10px;">
                            <div class="column">
                                <img class="demo cursor" style="width:90%; height: 90%;"
                                     src="Admin/images/<?php echo @$w1['image1']; ?>"
                                     onclick="currentSlide(1)">
                            </div>
                            <div class="column">
                                <img class="demo cursor" style="width:90%; height: 90%;"
                                     src="Admin/images/<?php echo @$w1['image2']; ?>"
                                     onclick="currentSlide(2)">
                            </div>
                            <div class="column">
                                <img class="demo cursor" style="width:90%; height: 90%;"
                                     src="Admin/images/<?php echo @$w1['image3']; ?>"
                                     onclick="currentSlide(3)">
                            </div>
                            <div class="column">
                                <img class="demo cursor" style="width:90%; height: 90%;"
                                     src="Admin/images/<?php echo @$w1['image4']; ?>"
                                     onclick="currentSlide(4)">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row col-md-5"
                     style="border-style: solid; background-color: white; margin-left: 20px; border-width: thin;">
                    <h3 style="margin-top: 2%; color: #0b97c4; font-weight: bold;"><i
                                class="fa fa-rupee"></i>&nbsp;<?php echo @$w1['item_rant']; ?><br>
                        <?php echo @$w1['item_type']; ?>
                    </h3>
                    <p class="mb-5">
                        <div style="border-style: solid; border-width: thick; padding: 4%; margin-top: -6%; height: 38%; width: 100%;">
                            <h4><u>
                                    Seller description :
                                </u>
                            </h4>
                            <span style="margin-top: 125px; font-size: 25px;"><?php echo @$w1['name']; ?></span><br>
                            <span style="margin-left: 125px; font-size: 18px; " id="foo"><?php echo @$w1['mobile']; ?></span>
                            <button class="fa fa-copy" onclick="copyToClip(document.getElementById('foo').innerHTML)">
                            </button>
                    <p><a href="https://api.whatsapp.com/send?phone=<?php echo @$w1['mobile']; ?>&text=It's Available" target="_blank">
                        <button class="btn btn-primary" style="width: 100%; height: 10%;">CHAT WITH SELLER</button>
                        </a></p>

                </div>
                <div style="border-style: solid; margin-top: -2%; height: 42%; width: 100%; border-width: thick; padding: 5px;">
                    <b>
                        <h4>
                            <u>Posted in :
                            </u>
                        </h4>
                    </b>
                    <a target="_blank" style="margin-top: 125px;" href="https://www.google.com/maps/place/<?php echo @$w1['addressline']; ?>,<?php echo @$w1['country']; ?>,<?php echo @$w1['state']; ?>,<?php echo @$w1['city']; ?>">
                        <?php echo @$w1['country']; ?>,<?php echo @$w1['state']; ?>,<?php echo @$w1['city']; ?></a>
                    <a target="_blank" href="https://www.google.com/maps/place/<?php echo @$w1['addressline']; ?>,<?php echo @$w1['country']; ?>,<?php echo @$w1['state']; ?>,<?php echo @$w1['city']; ?>">
                        <img src="Admin/images/simple-location-picker.png" width="330" height="120"
                             style="margin-bottom: 25px; margin-left: 7%;"></a>
                </div>
            </div>
        </div>

        <div class="details">
            <h4>
                <b>
                    <u>Details:</u>
                </b>
            </h4>

            <span style="margin-left: 125px;">
                <div class="container">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-5">
                                <table>
                                    <tr>
                                        <th>carpetArea(ft²):</th>
                                        <td><?php echo @$w1['carpetarea']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>maintenance (Monthly):</th>
                                        <td><?php echo @$w1['maintenance']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Floor No:</th>
                                        <td><?php echo @$w1['floorno']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Furnishing:</th>
                                        <td><?php echo @$w1['furnishing']; ?></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-2">

                            </div>
                              <div class="col-md-5">
                                    <table>
                                    <tr>
                                        <th>Rent Type:</th>
                                        <td>(PER)&nbsp;<?php echo @$w1['rant_type']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Status:</th>
                                        <td><?php echo @$w1['item_status']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Total Floor:</th>
                                        <td><?php echo @$w1['totlefloor']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Car Parking:</th>
                                        <td><?php echo @$w1['parking']; ?></td>
                                    </tr>
                                </table>
                              </div>
                        </div>
                    </div>
                </div>

            </span>

        </div>

        <div class="description">
            <h4><b>
                    <u>Description:</u>
                </b>
            </h4>

            <span style="margin-left: 125px;"><?php echo @$w1['item_description']; ?></span>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe omnis beatae libero
                quisquam
                ex
                nostrum repellendus, consectetur suscipit. Velit iusto ducimus sit quos officiis
                nesciunt
                libero,
                officia, aliquam doloremque totam.
            </p>
        </div>


    </section>
<?php } ?>
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <img src="img/about_1.jpg" alt="Image" class="img-fluid rounded img-shadow">
            </div>
            <div class="col-lg-4 ml-auto">
                <h3 class="mb-3">Contact Agent</h3>
                <p>I'm John Doe a realtor agent, Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe omnis
                    beatae libero quisquam ex nostrum repellendus, consectetur suscipit. Velit iusto ducimus sit quos
                    officiis nesciunt libero, officia, aliquam doloremque totam.
                </p>
                <p>Ratione natus expedita iusto, minus cumque vitae quo culpa reiciendis aspernatur aliquam veritatis
                    magnam non, dicta nemo inventore, nisi quas dolores. Modi laboriosam sunt aliquid rem, deserunt
                    quis? Porro, hic.
                </p>
                <p><a href="contact.php" class="btn btn-primary">Contact Me</a></p>
            </div>
        </div>
    </div>
</section>
<?php include 'Front.footer.php'; ?>
</body>
<!--contact number copy script-->
<script>
    function copyToClip(str) {
        function listener(e) {
            e.clipboardData.setData("text/html", str);
            e.clipboardData.setData("text/plain", str);
            e.preventDefault();
        }

        document.addEventListener("copy", listener);
        document.execCommand("copy");
        document.removeEventListener("copy", listener);
    };
</script>
<!--Item slider script-->
<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        var captionText = document.getElementById("caption");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        captionText.innerHTML = dots[slideIndex - 1].alt;
    }
</script>