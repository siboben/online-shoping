<?php

//$stock = $_POST['stock_code'];
//$type = $_POST['type_code'];
$name = $_POST['type_name'];
//$gender = $_POST['gender'];

include 'connect.php';

$query = "INSERT INTO type SET type_name = '$name'";
$result = mysql_query($query);
if ($result) {
    header ("Location: types_view.php");
}
else {
    header ("Location: types_registering.php");
}
?>
