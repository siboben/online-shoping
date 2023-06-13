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


            <h3 style = 'float: center; font-family: georgia'>New Clothes Registration Form</h3>

            <?php
                if (isset ($_GET['msg']) && $_GET['msg'] == 'FAILURE'){
                echo "<font color = 'yellow' face = 'georgia'>Cloth not registered!! Try again!</font>";
            }
            ?>
            <table border="1" align="center" width="750">
                <tr><td>
            <form method="post" action="clothes_register.php" enctype="multipart/form-data">
            <label>Stock_code:</label>
            <select name ="stock_code">
                <?php
                include 'connect.php';
                $query = mysql_query("select stock_code from stock");
                while ($ro = mysql_fetch_array($query)) {
                    echo "<option>" . $ro['stock_code'] . "</option>";
                }
                ?>
            </select>
            <label>Cloth Name: </label>
            <select name ="name">
                <?php
                include 'connect.php';
                $query = mysql_query("select type_name from type");
                while ($ro = mysql_fetch_array($query)) {
                    echo "<option>" . $ro['type_name'] . "</option>";
                }
                ?>
            </select>
            <label>Cloth color: </label>
            <select name ="color">
                <?php
                include 'connect.php';
                $query = mysql_query("select color_name from color");
                while ($ro = mysql_fetch_array($query)) {
                    echo "<option>" . $ro['color_name'] . "</option>";
                }
                ?>
            </select>
            <label>Size: </label>
            <select name ="size">
                <?php
                include 'connect.php';
                $query = mysql_query("select size_name from size");
                while ($ro = mysql_fetch_array($query)) {
                    echo "<option>" . $ro['size_name'] . "</option>";
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
            <label style="width: 300px">Picture: </label><input type ="file" name ="picture" style="width: 180px">
            <label>Quantity: </label><input type ="text" name ="quantity" required>
            <label>Price: </label><input type ="text" name ="price" required>
            <label>Post Price: </label><input type ="text" name ="post_price" required>
            <label><input type="submit" value="Register"></label>
            <label><input type="reset" value="Cancel"></label>
            </form>
                </td></tr>
               </table> 
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
