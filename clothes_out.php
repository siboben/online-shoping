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
<body>
    <?php
    include "header.php";
    include "menus.php";
    include "left.php";
    ?>
<div id="body">
          <?php
        echo "<h3 style = 'float: left; font-family: georgia'>Welcome " . $_SESSION['username'] . "</h3>";
          ?>  <a href ="user_logout.php" style ="float: right;padding: 20px 20px;">Logout</a><br />


            <h3 style = 'float: center; font-family: georgia'>Selling Clothes Form</h3>
            <table border="0" align="center">
                <tr>
                    <td>
            <form method="post" action="out_register.php">
            <label>Stock_code:</label>
            <select name ="stock_code">
                <?php
                include 'connect.php';
                $query = mysql_query("select stock_code from cloth_in");
                while ($ro = mysql_fetch_array($query)) {
                    echo "<option>" . $ro['stock_code'] . "</option>";
                }
                ?>
            </select>
            <label> Cloth Name: </label>
            <select name ="name">
                <?php
                include 'connect.php';
                $query = mysql_query("select name from cloth_in");
                while ($ro = mysql_fetch_array($query)) {
                    echo "<option>" . $ro['name'] . "</option>";
                }
                ?>
            </select>
            <label> Color: </label>
            <select name ="color">
                <?php
                include 'connect.php';
                $query = mysql_query("select color from cloth_in");
                while ($ro = mysql_fetch_array($query)) {
                    echo "<option>" . $ro['color'] . "</option>";
                }
                ?>
            </select>
            <label>Size: </label>
            <select name ="size">
                <?php
                include 'connect.php';
                $query = mysql_query("select size from cloth_in");
                while ($ro = mysql_fetch_array($query)) {
                    echo "<option>" . $ro['size'] . "</option>";
                }
                ?>
            </select>
            <label>Style: </label><input type ="text" name ="style" required>
            <label>Category</label>
            <select name="category">
                <option value="Select">Select Category</option>
                <option value="Men">Men</option>
                <option value="Women">Women</option>
                <option value="Kids">Kids</option>
            </select>
            <label>Quantity: </label><input type ="text" name ="quantity" required>
            <!--<label>Pre Price: </label><input type ="text" name ="pre_price" required>-->
            <label>Post Price: </label><input type ="text" name ="post_price" required>
            <label><input type="submit" value="Register"></label>
            <label><input type="reset" value="Cancel"></label>
            </form>
                    </td>
                </tr>
            </table><br>
 <?php

                if (isset ($_GET['msg']) && $_GET['msg'] == 'MUCH'){
                echo "<font color = 'yellow' face = 'georgia' style='float: center'>Sorry! You have ordered too much quantity,Try again less number !!!</font>";
                }

                if (isset ($_GET['msg']) && $_GET['msg'] == 'INVALID'){
                echo "<font color = 'yellow' face = 'georgia' style='float: center'>Sorry! You have entered invalid number, Please,enter number greater than 0 !!! </font>";
                }
            ?>
            <a href="keeper_rights.php" style="float: left">Back</a>
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
