<?php

session_start();
if(isset ($_SESSION['login_successful']) && $_SESSION['login_successful'] != 'YES'){
    header ("Location: admin_login.php");
}
?>
