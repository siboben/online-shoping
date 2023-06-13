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
          ?>
            <a href ="user_logout.php" style ="float: right;padding: 20px 20px;">Logout</a><br />


            <h3 style = 'float: center; font-family: georgia'>These are Shop Keeper Rights</h3>
            <table align="center">
                <tr>
                    <td align="left">
                     <!--<a href = "clothes_out.php">Clothes out form</a><br /><br />
                     <a href = "clothe_out_view.php">Clothes out View</a><br /><br />-->
                     <a href = "clothes_viewer.php">Clothes Registered</a><br /><br />
                     <a href = "customer_view.php">Registered Customers</a><br /><br />
                     <a href = "orders_viewer.php">Orders view</a><br /><br />
                     <!--<a href = "view_payment_message.php">Payment Message View</a><br /><br />-->
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
  <?php
}
else {
    header ("Location: login_form.php?msg=loginfirst");
}
?>
