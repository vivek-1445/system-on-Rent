<?php

include('database.php');

if(isset($_POST['id'])){
    $id = $_POST['id'];
    $query = "SELECT * FROM `states` where `country_id` = '$id'";
    $result = mysqli_query($database_connection,$query);
    while ($row = mysqli_fetch_array($result))
    {
        $id = $row['id'];
        $state = $row['name'];
        echo "<option value='$id'>$state</option>";
    }
}

if(isset($_POST['id'])){
    $id = $_POST['id'];
    $query = "SELECT * FROM `cities` where `state_id` = '$id'";
    $result = mysqli_query($database_connection,$query);
    while ($row = mysqli_fetch_array($result))
    {
        $id = $row['id'];
        $city = $row['name'];
        echo "<option value='$id'>$city</option>";
    }

}
?>