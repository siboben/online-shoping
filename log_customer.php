<?php

    $username = $_POST['username'];
    $password = $_POST['password'];

    include 'connect.php';

    $sel = "select * from customer where username = '$username' and password = '$password'";
    $query = mysql_query($sel);
    $fetch = mysql_fetch_array($query);
    if ($fetch){
        session_start();
        $_SESSION['login_successful'] = 'YES';
        $_SESSION['username'] = $username;

        header ("Location: customer_rights.php");
    }
    else {
        header ("Location: login_customer.php?msg=FAIL");
    }
?>
