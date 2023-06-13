<?php

$id = $_GET['id'];

include "connect.php";

$query = "DELETE FROM payment WHERE id = '$id'";
$result = mysql_query($query);

header ("Location: payment_message_view.php");

?>
