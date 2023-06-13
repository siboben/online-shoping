<?php

session_start();
if (isset ($_SESSION['login_successful']) && $_SESSION['login_successful'] == 'YES') {

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

$id = $_POST['id'];

$clothes = new Clothes();

$clothes ->setId($id);
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

$res = $clothes ->clothesUpdate();

    header("Location: clothes_view.php");
}
else {
    header("Location: admin_login.php");
}
?>
