<?php

    $username = $_POST['username'];
    $password = $_POST['password'];
	//$password = md5($_POST['password']);
    include 'connect.php';

    $sel = "select * from user where username = '$username' and password = '$password'";
    $query = mysql_query($sel);
    $fetch = mysql_fetch_array($query);
    //echo $fetch['user_type'];
    if ($fetch['user_type'] == 'Keeper'){
        session_start();
        $_SESSION['login_successful'] = 'YES';
        $_SESSION['username'] = $username;

        header ("Location: keeper_rights.php");
    }
   /* else if ($fetch['user_type'] == 'Customer') {
        session_start();
        $_SESSION['login_successful'] = 'YES';
        $_SESSION['username'] = $username;

        header ("Location: customer_rights.php");
    }*/
     else if ($fetch['user_type'] == 'administrator') {
        session_start();
        $_SESSION['login_successful'] = 'YES';
        $_SESSION['username'] = $username;

        header ("Location: admin_rights.php");
    }
    else {
        header ("Location: login_form.php?msg=FAIL");
    }
?>
