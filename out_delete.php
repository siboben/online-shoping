<?php

include 'connect.php';
$id = $_GET['id'];
$query = "delete from cloth_out where id = '$id'";
$result = mysql_query($query);

header ("Location: clothes_out_view.php");
?>