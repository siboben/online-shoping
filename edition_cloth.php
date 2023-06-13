<?php

include 'connect.php';

$type = $_POST['type'];
$color = $_POST['color'];
$stock_code = $_POST['stock_code'];
$category = $_POST['category'];
$gender = $_POST['gender'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$total = $quantity * $price;

$id = $_POST['id'];
$query = "UPDATE cloth_in SET stock_code='$type',cloth_type='$stock_code',color='$color',category='$category',gender='$gender', quantity='$quantity',price='$price',total='$total' WHERE id = '$id'";
$result = mysql_query($query);
    header("Location: clothes_view.php");

?>