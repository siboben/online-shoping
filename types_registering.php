<?php
     session_start();
     if(isset ($_SESSION['login_successful']) && $_SESSION['login_successful'] == 'YES'){
?>
<html>
<head>
<title>Online Clothes Shopping</title>
<link rel="shortcut icon" type="image" href="gunners.jpg" />
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body
    <?php
    include "header.php";
    include "menus.php";
    include "left.php";
    ?>
<div id="body">
          <?php
        echo "<h3 style = 'float: left; font-family: georgia'>Welcome " . $_SESSION['username'] . "</h3>";
          ?>  <a href ="user_logout.php" style ="float: right;padding: 20px 20px;">Logout</a><br />


            <h3 style = 'float: center; font-family: georgia'>New Type Registration Form</h3>
            <form method="post" action="type_registration.php">
            <!--<label>Stock Code:</label>
            <select name ="stock_code">
                <?php
                include 'connect.php';
                $query = mysql_query("select stock_code from stock");
                while ($ro = mysql_fetch_array($query)) {
                    echo "<option>" . $ro['stock_code'] . "</option>";
                }
                ?>
            </select>-->
            <label>Type Name: </label>
            <input type="text" name="type_name" required>
            <label><input type="submit" value="Register"></label>
            <label><input type="reset" value="Cancel"></label>
            </form>
            <br><br><br>
			<a href="admin_rights.php" style="float: left">Back</a>
</div>
    <?php
include "right.php";
include "footer.php";
?>
</body>
</html>
  <?php
}
else {
    header ("Location: login_form.php?msg=loginfirst");
}
?>
