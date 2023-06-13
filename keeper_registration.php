<?php

include 'keeper_class.php';

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = md5($_POST['password']);

$keeper = new keeper();

$keeper->setFname($fname);
$keeper->setLname($lname);
$keeper->setGender($gender);
$keeper->setPhone($phone);
$keeper->setEmail($email);
$keeper->setUsername($username);
$keeper->setPassword($password);

$result = $keeper->keeperAdd();

$q = "INSERT INTO user SET user_type = 'Keeper', username = '$username', password = '$password'";
$res = mysql_query($q);


if ($result) {

header ("Location: keepers_view.php");
}
else {
    header ("Location: keeper_register.php?msg=TRY");
}
?>
