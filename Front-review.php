<?php
include 'Front_header.php';
include 'database.php';
?>
<?php

    if (isset($_POST['submitreview']))
    {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $review = $_POST['review'];
        @$image = $_FILES['image']['name'];
        @$tmp_name = $_FILES['image']['tmp_name'];
        move_uploaded_file($tmp_name,"Admin/images/".$image);

         $insert_review ="insert into `customer-review` (`name`,`mobile`,`email`,`review`,`image`) values ('$name','$phone','$email','$review','$image')";

        $fire_insert_review = mysqli_query($database_connection,$insert_review);
    }

?>

    <section class="section bg-primary contact-section" id="next-section">
        <div class="container">
            <div class="row">
                <div class="col-md-7">

                    <form action="Front-review.php" method="post" class="bg-white p-md-5 p-4 mb-5" enctype="multipart/form-data" style="margin-top: -150px;">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="name">Name</label>
                                <input type="text" id="name" name="name" class="form-control ">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="phone">Phone</label>
                                <input type="text" id="phone" name="phone" class="form-control ">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" class="form-control ">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="message">Write Your Review</label>
                                <textarea name="review" id="review" class="form-control " cols="30" rows="8"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                            <label for="message">Chose Your Image</label><br>
                                <input type="file" id="image" name="image">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="submit" value="Submit review" name="submitreview" class="btn btn-primary">
                            </div>
                        </div>
                    </form>

                </div>
                <div class="col-md-5">
                    <div class="row">
                        <div class="col-md-10 ml-auto contact-info">
                            <p><span class="d-block">Address:</span> <span> 98 West 21th Street, Suite 721 New York NY 10016</span></p>
                            <p><span class="d-block">Phone:</span> <span> (+1) 435 3533</span></p>
                            <p><span class="d-block">Email:</span> <span> info@yourdomain.com</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php include 'Front.footer.php'; ?>