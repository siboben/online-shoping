<?php

$id = $_GET['id'];

include 'customer_class.php';

$cust = new customer();
$cust->customerDelete($id);

header ("Location: customers_view.php");
?>