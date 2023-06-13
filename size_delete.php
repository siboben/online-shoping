<?php

include 'connect.php';
$id = $_GET['id'];
$query = "delete from category where id = '$id'";
$result = mysql_query($query);

header ("Location: categories_view.php");
?>