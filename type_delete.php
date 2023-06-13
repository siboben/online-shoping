<?php

include 'connect.php';
$id = $_GET['id'];
$query = "delete from type where id = '$id'";
$result = mysql_query($query);

header ("Location: types_view.php");
?>
