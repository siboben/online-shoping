<?php

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    include 'connect.php';

    $sel = "select * from customer where username = '$username' and password = '$password'";
    $query = mysql_query($sel);
    $fetch = mysql_fetch_array($query);
    if ($fetch){
        session_start();
        $_SESSION['login_successful'] = 'YES';
        $_SESSION['username'] = $username;
        header ("Location: ordering_form.php");
    }
    else {
        header ("Location: customer_login.php?msg=FAIL");
    }
?>
