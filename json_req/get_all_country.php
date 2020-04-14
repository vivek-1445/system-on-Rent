<?php

$database_connection = mysqli_connect("localhost","root","","address");
$query = "SELECT * FROM `countries`";
$result = mysqli_query($database_connection,$query);
$json_array = array();
 while($row = mysqli_fetch_assoc($result))
 {
     $json_array[] = $row;
 }

    echo "<pre>";
    print_r($json_array);
    echo "</pre>";

?>
