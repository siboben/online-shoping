<?php
session_start();

include 'customer_class.php';

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = md5($_POST['password']);

$cust = new customer();

$cust->setFname($fname);
$cust->setLname($lname);
$cust->setGender($gender);
$cust->setPhone($phone);
$cust->setEmail($email);
$cust->setUsername($username);
$cust->setPassword($password);

$result = $cust->customerAdd();

/*$q = "INSERT INTO user SET user_type = 'Customer', username = '$username', password = '$password'";
$res = mysql_query($q);*/

$_SESSION['phone'] = $phone;
if ($result) {

header ("Location: customer_congratulation.php");
}
else {
    header ("Location: customer_register.php?msg=TRY");
}
?>
