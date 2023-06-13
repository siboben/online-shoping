<?php

include "connect.php";

$id = $_GET['id'];

$query = "delete from comments where id = '$id'";
$result = mysql_query($query);

header ("Location: comments_view.php");

?>
