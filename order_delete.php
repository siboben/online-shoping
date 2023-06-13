<?php

$id = $_GET['id'];

include 'order_class.php';

$order = new order();
$order->orderDelete($id);

header ("Location: orders_view.php");
?>