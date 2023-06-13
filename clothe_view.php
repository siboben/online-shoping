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

            <h3 style = 'float: center; font-family: georgia'>Detailed information of the cloth</h3>
            <?php
            $id = $_GET['id'];
          include 'connect.php';
          $query = "select * from cloth_in where id = '$id'";
          $result = mysql_query($query);
          $fetch = mysql_fetch_array($result);
            ?>
            <table border ="0" align ="center" width="400">
                <tr>
                    <td rowspan ="6" align="left"><?php echo "<img src = '$fetch[picture]' width = '200px' height = '200px' />" ;?></td>
                </tr>
                <tr>
                    <td align="left">Cloth Name: &nbsp;<?php echo $fetch['name'];?></td>
                </tr>
                <tr>
                   <td align="left">Color: &nbsp;<?php echo $fetch['color'];?></td>
                </tr>
                <tr>
                   <td align="left">Size: &nbsp;<?php echo $fetch['size'];?></td>
                </tr>
                <tr>
                   <td align="left">Category: &nbsp;<?php echo $fetch['category'];?></td>
                </tr>
                <tr>
                   <td align="left">Price: &nbsp;<?php echo $fetch['post_price'];?>Rwf</td>
                </tr>
                
            </table>
            <br />
            <p style="font-family: georgia">If you are interested to this type of cloth, please <a href="customer_login.php" style="font-weight: bold">Sign in</a> to purchase it</p>
            <p style="font-family: georgia">If you are not a customer member, please <a href="customer_register.php" style="font-weight: bold">Sign up</a> to get access to our system</p>
            <a href="clothes_registering.php" style="float: left">Back</a>
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
