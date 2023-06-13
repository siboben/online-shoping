<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

?><?php

include 'connect.php';
$id = $_GET['id'];
$query = "delete from account where id = '$id'";
$result = mysql_query($query);

header ("Location: view.php");
?>

