<?php

include 'connect.php';
$id = $_GET['id'];
$query = "delete from payment where id = '$id'";
$result = mysql_query($query);

header ("Location: view_payment.php");
?>