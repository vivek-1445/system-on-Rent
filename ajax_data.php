<?php

include 'database.php';

$que = "select * from item ".(isset($_POST['search']) ? "where item_type like '%{$_POST['search']}%' or item_description like '%{$_POST['search']}%' or item_rant like '%{$_POST['search']}%'" : '');

$fire1 = mysqli_query($database_connection,$que);

$json_array = array();

while($data = mysqli_fetch_assoc($fire1))
{
    $json_array[] = $data;
}
echo json_encode($json_array);
die();
//echo '<pre>';
//print_r($json_array);
//echo '</pre>';
?>