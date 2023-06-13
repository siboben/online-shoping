<?php
error_reporting(0);
session_start();
$phone = $_SESSION['phone'];

$unit_price = $_SESSION['unit_price'];
$name = $_SESSION['name'];
$color = $_SESSION['color'];
$size = $_SESSION['size'];
$style = $_SESSION['style'];
$category = $_SESSION['category'];
//print $unit_price."<br />";
?>
<html>
<head>
<title>Online Clothes Shopping</title>
<link rel="shortcut icon" type="image" href="gunners.jpg" />
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php
    include "header.php";
    include "menus.php";
    include "left.php";
    ?>
<div id="body">
    <h2 style = 'float: left; font-family: georgia;padding-left: 5px;color: yellow'>Congratulations!!</h2><br />

 <p style = 'float: left; font-family: georgia;font-style: italic;padding-left: 10px'>Dear customer, you have successful registered in our system, you will use both username and password below to login in our system to perform different tasks like editing your wrong registered information and also to buy your favorite clothes in our shop.</p><br>
    <p style = 'float: center; font-family: georgia;font-weight: bold'>These are your full registered information:</p>

<?php

include 'connect.php';

$query = "SELECT * FROM customer WHERE phone = '$phone'";
$result = mysql_query($query);
$fet = mysql_fetch_array($result);
?>
    <table border="0" align="center">
        <tr><td>
    <label>Firstname:</label></td>
            <td><p style="display: block;"><?php echo $fet['firstname']; ?></p></td>
        </tr>
        <tr><td>
    <label>Lastname:</label></td>
        <td><p style="display: block;"><?php echo $fet['lastname']; ?></p></td>
        </tr>
        <tr><td>
    <label>Gender:</label></td>
       <td> <p style="display: block;"><?php echo $fet['gender']; ?></p></td>
        </tr>
        <tr><td>
    <label>Phone N<sup>o</sup>:</label></td>
        <td><p style="display: block;"><?php echo $fet['phone']; ?></p></td>
        </tr>
        <tr><td>
    <label>Email:</label></td>
        <td><p style="display: block;"><?php echo $fet['email']; ?></p></td>
        </tr>
        <tr><td>
    <label>Username:</label></td>
       <td> <p style="display: block;"><?php echo $fet['username']; ?></p></td>
        </tr>
        <tr><td>
    <label>Password:</label></td>
        <td><p style="display: block;"><?php echo $fet['password']; ?></p></td>
        </tr>
    </table>
<h3 style = 'float: center; font-family: georgia;color: violet'>Thanks for registering yourself,</h3>
</div>
<?php
include "right.php";
include "footer.php";
?>
</body>
</html>