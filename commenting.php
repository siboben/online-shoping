<?php

//error_reporting(0);

include "connect.php";

$name = $_POST['names'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$comment = $_POST['comments'];

$query = "insert into comments set names = '$name', phone = '$phone', email = '$email', comments = '$comment'";
$result = mysql_query($query);
if ($result) {
    header("location: comments.php");
}
else {
    header ("Location: comments.php?msg=NOT");
}
?>
