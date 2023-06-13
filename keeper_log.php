<?php

    $username = $_POST['username'];
    $password = $_POST['password'];

    include 'connect.php';

    $sel = "select * from shop_keeper where username = '$username' and password = '$password'";
    $query = mysql_query($sel);
    $fetch = mysql_fetch_array($query);
    if ($fetch){
        session_start();
        $_SESSION['login_successful'] = 'YES';
        $_SESSION['username'] = $username;

        header ("Location: keeper_rights.php");
    }
    else {
        header ("Location: keeper_login.php?msg=FAIL");
    }
?>
