<?php

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$gender =$_POST['gender'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$identity = $_POST['identity'];
$account = $_POST['account'];
$amount = $_POST['amount'];

include 'connect.php';

$query = "INSERT INTO bpr.account SET firstname = '$firstname', lastname = '$lastname', gender = '$gender', phone = '$phone',email='$email',idcard='$identity',accountn='$account',amount='$amount'";
$result = mysql_query($query);
if ($result) {
    header ("Location:view.php");
}
else {
    header ("Location: customer_register.php?msg=FAIL");
}
?>
