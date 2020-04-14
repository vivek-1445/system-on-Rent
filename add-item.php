<?php
include "header.php";
include "left-sider.php";
include('database.php');


if (isset($_POST['submit'])) {
    $get_id = $_SESSION['user']['id'];
    $get_name = $_SESSION['user']['name'];
    $item_type = $_POST['item_type'];
    $rant = $_POST['rant'];
    $type = $_POST['type'];
    @$status = $_POST['status'];

    $addressline = $_POST['addressline'];

    $id1 = $_POST['country'];
    $countrys = ("select * from `countries` where `id`='$id1'");
    $country1 = mysqli_query($database_connection, $countrys);
    $w2 = mysqli_fetch_array($country1);
    $country = @$w2['name'];


    $id2 = $_POST['state'];
    $states = "select * from `states` where `id`='$id2'";
    $state1 = mysqli_query($database_connection, $states);
    $w1 = mysqli_fetch_array($state1);
    $state = @$w1['name'];

    $id3 = $_POST['city'];
    $citys = "select * from `cities` where `id`='$id3'";
    $city1 = mysqli_query($database_connection, $citys);
    $w1 = mysqli_fetch_array($city1);
    $city = @$w1['name'];

    @$image1 = $_FILES['image1']['name'];
    @$tmp_name1 = $_FILES['image1']['tmp_name'];
    move_uploaded_file($tmp_name1, "Admin/images/" . $image1);

    @$image2 = $_FILES['image2']['name'];
    @$tmp_name2 = $_FILES['image2']['tmp_name'];
    move_uploaded_file($tmp_name2, "Admin/images/" . $image2);

    @$image3 = $_FILES['image3']['name'];
    @$tmp_name3 = $_FILES['image3']['tmp_name'];
    move_uploaded_file($tmp_name3, "Admin/images/" . $image3);

    @$image4 = $_FILES['image4']['name'];
    @$tmp_name4 = $_FILES['image4']['tmp_name'];
    move_uploaded_file($tmp_name4, "Admin/images/" . $image4);

    $carpetarea = $_POST['carpetarea'];
    $maintenance = $_POST['maintenance'];
    $floorno = $_POST['floorno'];
    $furnishing = $_POST['furnishing'];
    $totlefloor = $_POST['totlefloor'];
    $parking = $_POST['parking'];
    $description = $_POST['myTextarea'];


    $insert_item = "INSERT INTO `item`(`user_id`, `user_name`, `item_type`, `item_rant`, `rant_type`, `item_status`, `addressline`, `country`, `state`, `city`, `image1`, `image2`, `image3`,`image4`, `carpetarea`, `maintenance`, `floorno`, `furnishing`, `totlefloor`, `parking`, `item_description`,`created_date`)values
                                      ('$get_id', '$get_name', '$item_type', '$rant', '$type', '$status', '$addressline', '$country', '$state', '$city', '$image1', '$image2', '$image3', '$image4', '$carpetarea', '$maintenance', '$floorno', '$furnishing', '$totlefloor', '$parking', '$description',now())";

    $fire = mysqli_query($database_connection, $insert_item);

    if ($fire) {
        echo "<script type='text/javascript'>
                window.location.href = \"view-item.php\";
                alert('Your Data Uploded');
            </script>";
    }
}

//get data for update a proparty value
@$id = $_GET['id'];
$q1 = "select * from item where `item_id`='$id'";
$q2 = mysqli_query($database_connection, $q1);
@$q3 = mysqli_fetch_array($q2);


?>
<head>
    <title>Add Item</title>
    <script src="tinymce/tinymce.min.js"></script>
    <link rel="stylesheet" href="css/add-item.css">
</head>
<body>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content">
        <ol class="breadcrumb">
            <li><a href="javascript:history.go(-1)"><span class="fa fa-arrow-left"></span></a></li>
            <li><a href="view-item.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="view-item.php">view item</a></li>
            <li class="active">Add item</li>
        </ol>
        <form method="post" enctype="multipart/form-data">
            <div class="container">
                <div class="row col-md-12">
                    <div class="row col-md-5">
                        <div class="box1">
                            <div class="form-group">

                                <div class="control-group">
                                    <label class="control-label">Select Item Type:</label>
                                    <div class="controls">
                                        <input list="browsers" id="item_type" class="form-control" name="item_type"
                                               placeholder="Enter your item type"
                                               value="<?php echo @$q3['item_type'] ?>">
                                        <datalist id="browsers">
                                            <option value="Home">
                                            <option value="Farmhouse">
                                            <option value="lend">
                                        </datalist>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Rant Of Item</label>
                                <input type="number" class="form-control" name="rant" id="exampleInputEmail1"
                                       aria-describedby="emailHelp" placeholder="Rant">
                            </div>

                            <?php $type = array("Day", "Week", "Month"); ?>
                            <div class="form-group">
                                <div class="control-group">
                                    <label class="control-label">Select Rant Type :</label>
                                    <div class="controls">
                                        <select name="type" class="form-control" name="select">
                                            <option>Rant Type</option>
                                            <?php for ($i = 0; $i < sizeof($type); $i++) { ?>
                                                <option>
                                                    <?php echo @$type[$i]; ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group ">
                                <label>Select status</label><br>
                                <input type="radio" name="status" value="onrant">&nbsp;<b>on rant</b>&nbsp;<br>
                                <input type="radio" name="status" value="available">&nbsp;<b>available</b>
                            </div>
                        </div>


                        <div class="addressbox">
                            <h3><u><b>Select Your
                                        Item Adderss</b></u></h3>
                            <div class="form-group">
                                <label>Address:</label>
                                <input type="text" class="form-control" name="addressline"
                                       placeholder="Enter your Address line">
                            </div>
                            <div class="form-group">
                                <div class="control-group">
                                    <label class="control-label">Select Country :</label>
                                    <div class="controls">
                                        <select class="form-control" name="country" id="country">
                                            <option>Select Country</option>
                                            <?php
                                            $query = "SELECT * FROM `countries`";
                                            $result = mysqli_query($database_connection, $query);
                                            while ($row = mysqli_fetch_array($result)) {
                                                ?>
                                                <option value="<?php echo @$row['id']; ?>"><?php echo @$row['name']; ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="control-group">
                                    <label class="control-label">Select State :</label>
                                    <div class="controls">
                                        <select class="form-control" name="state" id="state">
                                            <option>Select State</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="control-group">
                                    <label class="control-label">Select City :</label>
                                    <div class="controls">
                                        <select class="form-control" name="city" id="city">
                                            <option>Select City</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="imagebox">
                            <h3>
                                <u>
                                    <b>Select Image:</b>
                                </u>
                            </h3>
                            <div class="control-group">
                                <label class="control-label">Chose Image 1:</label>
                                <div class="controls">
                                    <input type="file" id="image" name="image1">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Chose Image 2 :</label>
                                <div class="controls">
                                    <input type="file" name="image2">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Chose Image 3 :</label>
                                <div class="controls">
                                    <input type="file" name="image3">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Chose Image 4 :</label>
                                <div class="controls">
                                    <input type="file" name="image4">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row col-md-2">
                    </div>
                    <div class="row col-md-5">
                        <div class="detailbox">
                            <h3>
                                <u>
                                    <b> Enter Your Item Details</b>
                                </u>
                            </h3>
                            <div class="form-group">
                                <label>Carpet Area (ft²):</label>
                                <input type="number" class="form-control" name="carpetarea"
                                       placeholder="Enter Carpet Area ">
                            </div>
                            <div class="form-group">
                                <label>maintenance (Monthly):</label>
                                <input type="number" class="form-control" name="maintenance"
                                       placeholder="Enter Monthly maintenance">
                            </div>
                            <div class="form-group">
                                <label>Floor No:</label>
                                <input type="number" class="form-control" name="floorno" placeholder="Enter Floor No">
                            </div>
                            <div class="form-group ">
                                <label>Furnishing:</label><br>
                                <input type="radio" name="furnishing" value="Furnished">&nbsp;<b>Furnished</b>&nbsp;<br>
                                <input type="radio" name="furnishing" value="NotFurnished">&nbsp;<b>Un Furnished</b>
                            </div>
                            <div class="form-group">
                                <label>Total Floors :</label>
                                <input type="number" class="form-control" name="totlefloor"
                                       placeholder="Enter Total Floor">
                            </div>
                            <div class="form-group ">
                                <label>Car Parking:</label><br>
                                <input type="radio" name="parking" value="Available">&nbsp;<b>available</b>&nbsp;<br>
                                <input type="radio" name="parking" value="Not available">&nbsp;<b>Not available</b>
                            </div>
                            <div class="form-group">
                                <div class="control-group">
                                    <div class="controls">
                                        <label>Item description</label>
                                        <div></div>
                                        <textarea class="textarea form-control" name="myTextarea"
                                                  value="<?php echo @$q3['item_description']; ?>"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <!--            address of item-->
            <input type="submit" name="submit" class="btn btn-primary" value="POST NOW">
        </form>
    </section>
</div>
</body>
<?php include "footer.php"; ?>
<?php include "right-sider.php"; ?>
<!--script for address-->
<script>
    $(document).ready(function () {
        $("#country").on('change', function () {
            var conutryId = $(this).val();
            $.ajax({
                method: "POST",
                url: "ajax.php",
                data: {id: conutryId},
                dataType: "html",
                success: function (data) {
                    $('#state').html(data);
                }
            });
        });

        $("#state").on('change', function () {
            var stateId = $(this).val();
            $.ajax({
                method: "POST",
                url: "ajax.php",
                data: {id: stateId},
                dataType: "html",
                success: function (data) {
                    $('#city').html(data);
                }
            });
        });
    });
</script>