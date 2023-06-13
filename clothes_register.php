<?php

include 'clothes_class.php';

$stock_code = $_POST['stock_code'];
$name = $_POST['name'];
$color = $_POST['color'];
$size = $_POST['size'];
$style = $_POST['style'];
$category = $_POST['category'];
move_uploaded_file($_FILES['picture']['tmp_name'], $_FILES['picture']['name']);
$picture = $_FILES['picture']['name'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$total = $quantity * $price;
$post_price = $_POST['post_price'];

$clothes = new Clothes();

$clothes ->setStock_code($stock_code);
$clothes ->setName($name);
$clothes ->setColor($color);
$clothes ->setSize($size);
$clothes ->setStyle($style);
$clothes ->setCategory($category);
$clothes ->setPicture($picture);
$clothes ->setQuantity($quantity);
$clothes ->setPrice($price);
$clothes ->setTotal($total);
$clothes ->setPost_price($post_price);

$result = $clothes ->clothAdd();

if ($result) {
    header ("Location: clothes_view.php");
}
else {

$quer = "SELECT * FROM cloth_in WHERE stock_code='$stock_code'";
$res = mysql_query($quer);
$fetch = mysql_fetch_array($res);

$price_stored = $fetch['price'];
$stored_quantity = $fetch['quantity'];
$quantity_updated = $stored_quantity + $quantity;
$total_updated = $quantity_updated * $price_stored;

$query = "UPDATE cloth_in SET stock_code='$stock_code', name='$name', color='$color', size='$size',style='$style',category='$category', picture='$picture', quantity='$quantity_updated', price='$price', total=$total_updated, post_price='$post_price' WHERE stock_code = '$stock_code'";
$res = mysql_query($query);
if ($res) {
    header ("Location: clothes_view.php");
}
 else {

    header ("Location: clothes_registering.php?msg=FAILURE");
}
}
?>