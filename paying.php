<?php
session_start();
//$total = $_SESSION['tot'];
//$count = $_SESSION['counter'];

include 'connect.php';

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$phone = $_POST['phone'];
$money = $_POST['money'];
$date = $_POST['date'];

$quer = "SELECT * FROM customer WHERE phone = '$phone'";
$res = mysql_query($quer);
$fetch = mysql_fetch_array($res);
echo $fone = $fetch['phone'];

if ($fone != $phone) {
    header ("Location: payment_message.php?msg=NOT");
}
else {

$query = "INSERT INTO payment SET firstname = '$fname', lastname = '$lname', phone = '$phone', money = '$money', date = '$date'";
$result = mysql_query($query);

if ($result) {
    header("Location: message_success.php");
}
else {
    header ("Location: payment_message.php?msg=FAIL");
}
}
?>
