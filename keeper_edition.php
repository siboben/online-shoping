<?php

include 'keeper_class.php';

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$id = $_POST['id'];

$keeper = new keeper();

$keeper->setId($id);
$keeper->setFname($fname);
$keeper->setLname($lname);
$keeper->setGender($gender);
$keeper->setPhone($phone);
$keeper->setEmail($email);
$keeper->setUsername($username);
$keeper->setPassword($password);

$result = $keeper->keeperUpdate();

header ("Location: keepers_view.php");

?>
