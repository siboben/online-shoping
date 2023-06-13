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

    include 'keeper_class.php';
    $id = $_GET['id'];
    $keeper = new keeper();
    $keeper = $keeper ->keeperView($id);
?>
<h3 style = 'float: center; font-family: georgia'>Shop Keeper Edition Form</h3>
<table border="0" align="center" width="400">
    <tr>
        <td>
<form action="keeper_edition.php" method="POST">
    <label>Firstname:</label> <input type="text" size = "25" name="firstname" value="<?php echo $keeper ->getFname(); ?>"/>
    <label>Lastname:</label> <input type="text" size = "25" name="lastname" value="<?php echo $keeper ->getLname(); ?>"/>
<label>Gender:</label> <select name="gender" >
	<option value = "Not selected">--Choose sex--</option>
        <option value = "Male" <?php echo $keeper ->getGender() == "Male" ? "SELECTED" : ""; ?>>Male</option>
        <option value = "Female" <?php echo $keeper ->getGender() == "Female" ? "SELECTED" : ""; ?>>Female</option>
	</select>
<label>Phone No:</label> <input type="text" size = "25" name="phone" value="<?php echo $keeper ->getPhone(); ?>" />
<label>Email:</label> <input type="text" size = "25" name="email" value="<?php echo $keeper ->getEmail(); ?>" />
<label>Username:</label> <input type="text" size = "25" name="username" value="<?php echo $keeper ->getUsername(); ?>" />
<label>Password:</label> <input type="text" size = "25" name="password" value="<?php echo $keeper ->getPassword(); ?>" />
<input type="hidden" name="id" value="<?php echo $id; ?>">
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
