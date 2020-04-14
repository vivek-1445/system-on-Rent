<?php
include "header.php";
include "left-sider.php";

include ('../database.php');


if (isset($_POST['submit'])){
    $get_id = $_SESSION['user']['id'];
    $get_name = $_SESSION['user']['name'];
    $item_type = $_POST['item_type'];
    $description = $_POST['myTextarea'];
    $type = $_POST['type'];
    $rant = $_POST['rant'];
    @$status = $_POST['status'];
    @$image = $_FILES['image']['name'];
    @$tmp_name = $_FILES['image']['tmp_name'];
    move_uploaded_file($tmp_name,"images/".$image);


    if(isset($_GET['id'])) {
        //    $id = $_GET['id'];
        //    $insert = "update item set `user_id`='$get_id', `user_name`='$get_name',`item_type`=
        //                      '$item_type',`item_description`='$description',`rant_type`='$type',`item_rant`=
        //                      '$rant',`item_status`='$status',`image`='$image' where `id`='$id'";

    }
    else {

        $insert_item = "insert into item(`user_id`,`user_name`,`item_type`,`item_description`,`rant_type`,`item_rant`,`item_status`,`image`)values
                                      ('$get_id','$get_name','$item_type','$description','$type','$rant','$status','$image')";
    }
    $fire = mysqli_query($database_connection,$insert_item);
}



//if(isset($_GET['id'])) {
//    $id = $_GET['id'];
//    $q1 = "select * from item where `id`='$id'";
//    $q2 = mysqli_query($database_connection, $q1);
//    $q3 = mysqli_fetch_array($q2);
//}

?>
<head>
    <script src="tinymce/tinymce.min.js"></script>
    <script>tinymce.init({forced_root_block : "",selector:'textarea'});</script>
    <script>
        tinymce.init({
            selector : '#myTextarea'

        });
    </script>
</head>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content">
        <form method="post" enctype="multipart/form-data" >
            <div class="form-group">
                <div class="control-group">
                    <label class="control-label">Select Item Type:</label>
                    <div class="controls" >
                        <input list="browsers" id="item_type"  class="form-control" name="item_type" placeholder="Enter your item type" style="width: 37%;">
                        <datalist  id="browsers">
                            <option  value="Home">
                            <option value="Car">
                            <option value="Bike">
                            <option value="Cloth">
                            <option value="lend">
                            <option value="Jewellery">
                        </datalist>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="control-group">
                    <div class="controls" >
                        <label>Item description</label>
                        <div ></div>
                        <textarea class="form-control" name="myTextarea" id="myTextarea" class="summernote" placeholder="Write Details About Your Item..." style="width: 37%; height: 120px;"></textarea>
                    </div>
                </div>
            </div>
            <?php  $type = array("Day","Week","Month"); ?>
            <div class="form-group">
                <div class="control-group">
                    <label class="control-label">Select Rant Type :</label>
                    <div class="controls" >
                        <select name="type" class="form-control" name="select" id="select" style="width:37%;">
                            <option >Rant Type</option>
                            <?php for($i=0; $i < sizeof($type); $i++) { ?>
                                <option>
                                    <?php echo @$type[$i]; ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label >Rant Of Item</label>
                <input type="number" class="form-control" name="rant" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Rant"   style="width:37%;">
            </div>
            <div class="form-group has-feedback">
                <h4>Select status</h4>
                <div></div>
                <input type="radio"   name="status" value="onrant">&nbsp;<b>on rant</b>&nbsp;<br>
                <input type="radio"   name="status" value="available">&nbsp;<b>available</b>
            </div>
            <div class="control-group">
                <label class="control-label">Chose Image :</label>
                <div class="controls">
                    <input type="file" id="image" name="image">
                    <?php if(isset($img_error)) { ?>
                        <span style="color:red"><?php echo $img_error; ?></span>
                    <?php } ?><br>
                    <span style="color:red;" id="error_image"></span>
                </div>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <input  type="submit" name="submit" class="btn btn-primary" value="submit">
        </form>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include "footer.php"; ?>
<?php include "right-sider.php"; ?>
