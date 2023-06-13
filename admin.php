<?php

    $username = $_POST['username'];
    $password = $_POST['password'];

    include 'connect.php';

    $sel = "select * from admin where username = '$username' and password = '$password'";
    $query = mysql_query($sel);
    $fetch = mysql_fetch_array($query);
    if ($fetch){
        session_start();
        $_SESSION['login_successful'] = 'YES';
        $_SESSION['username'] = $username;

        header ("Location: admin_rights.php");
    }
   /* else {
	echo '<script type="text/javascript">alert("Please Login As Adimin or Secretary");window.location=\'admin_login.php\';</script>';
}*/
    else {
        header ("Location: admin_login.php?msg=FAIL");
    }
?>
