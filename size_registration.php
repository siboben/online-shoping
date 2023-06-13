<?php

$name = $_POST['cat_name'];

include 'connect.php';

$query = "INSERT INTO category SET cat_name = '$name'";
$result = mysql_query($query);
if ($result) {
    header ("Location: categories_view.php");
}
else {
    header ("Location: categories_registering.php");
}
?>
