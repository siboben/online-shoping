<?php

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$gender =$_POST['gender'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$identity = $_POST['identity'];
$account = $_POST['account'];
$amount = $_POST['amount'];
$id = $_POST['id'];

include 'connect.php';

$query = "UPDATE account SET firstname = '$firstname', lastname = '$lastname', gender = '$gender', phone = '$phone',email='$email',idcard=$identity,accountn=$account,amount=$amount WHERE id = '$id'";
$result = mysql_query($query);
if ($result) {
    header ("Location:view.php");
}
?>
