<?php
session_start();
$phone = $_SESSION['phone'];
?>
<html>
<head>
<title>Online Clothes Shopping</title>
<link rel="shortcut icon" type="image" href="gunners.jpg" />
<link rel="stylesheet" type="text/css" href="style.css">
<script>

</script>
</head>
<body>
    <?php
    include "header.php";
    include "menus.php";
    include "left.php";
    ?>
<div id="body">
<?php

    include 'connect.php';
    $query = "SELECT * FROM customer WHERE phone = '$phone'";
    $result = mysql_query($query);
    $fetch = mysql_fetch_array($result);
?>
<h3 style = 'float: center; font-family: georgia'>Customer Edition Form</h3>
<table border="0" align="center" width="400">
    <tr>
        <td>
<form action="customer_edition.php" method="POST">
    <label>Firstname:</label> <input type="text" size = "25" name="firstname" value="<?php echo $fetch['firstname']; ?>"/>
<label>Lastname:</label> <input type="text" size = "25" name="lastname" value="<?php echo $fetch['lastname']; ?>"/>
<label>Gender:</label> <select name="gender" >
	<option value = "Not selected">--Choose sex--</option>
	<option value = "Male" <?php echo $fetch['gender'] == "Male" ? "SELECTED" : ""; ?>>Male</option>
	<option value = "Female" <?php echo $fetch['gender'] == "Female" ? "SELECTED" : ""; ?>>Female</option>
	</select>
<label>Phone No:</label> <input type="text" size = "25" name="phone" value="<?php echo $fetch['phone']; ?>" />
<label>Email:</label> <input type="text" size = "25" name="email" value="<?php echo $fetch['email']; ?>" />
<label>Username:</label> <input type="text" size = "25" name="username" value="<?php echo $fetch['username']; ?>" />
<label>Password:</label> <input type="text" size = "25" name="password" value="<?php echo $fetch['password']; ?>" />
<input type="hidden" name="phone" value="<?php echo $fetch['phone']; ?>">
<label><input type="submit" value="Save"/></label>&nbsp;
<label><input type = "reset" value = "Cancel"></label>
</form>
        </td>
    </tr>
</table>
</div>
<?php
include "right.php";
include "footer.php";
?>
</body>
</html>
