<?php
session_start();
$phone = $_SESSION['phone'];

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

$query = "UPDATE customer SET firstname='$fname',lastname='$lname',gender='$gender',phone='$phone',email='$email',username='$username', password='$password' WHERE phone = '$phone'";
$result = mysql_query($query);
if($result){
echo 'Done!';
}
else {
    echo "Fail";
}
?>