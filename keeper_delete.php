<?php

$id = $_GET['id'];

include 'keeper_class.php';

$keeper = new keeper();
$keeper->keeperDelete($id);

header ("Location: keepers_view.php");
?>