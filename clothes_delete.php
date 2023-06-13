<?php

include 'clothes_class.php';
$id = $_GET['id'];
$clothes = new Clothes();
$clothes ->clothesDelete($id);
header ("Location: clothes_view.php");

?>
