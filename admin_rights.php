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
         
 
            <h3 style = 'float: center; font-family: georgia'>These are Administrative Rights</h3>
            <table align="center" border="0">
                <tr>
                    <td align="left">
                     <a href = "clothes_registering.php">Clothes Registration</a>
                     </td>
                     <td align="left">
                         <a href = "clothes_view.php">Clothes Registered</a>
                         
                     </td>
                </tr>
                <tr></tr>
                <tr>
                     <td align="left">
                         &nbsp;
                     <td align="left">
                     
                     </td>
                </tr>

                <tr></tr>
                <tr></tr>
                <tr>

                     <td align="left">
                         <a href = "types_registering.php">Types Registration</a>
                     
                     </td>
                     <td align="left">
                     <a href = "types_view.php">Types registered</a>
                     </td>
                </tr>
                <tr></tr>
                <tr></tr>
                <tr>
                     <td align="left">
                         &nbsp;
                     </td>
                     <td align="left">
                         &nbsp;
                     <td align="left">
                         </td>
                </tr>
                <tr></tr>
                <tr></tr>
                <tr>
                    <td>
                     <a href = "keeper_register.php">ShopKeeper Registration</a>
                     </td>
                     <td align="left" align="right">
                         <a href = "keepers_view.php">Shop Keeper View</a>
                     
                    </td>
                </tr>
                <tr>
                     <td align="left">
                         &nbsp;
                     </td>
                     <td align="left">
                         &nbsp;
                     <td align="left">
                         </td>
                </tr>
                <tr>
                     <td align="left">
                         <a href = "sizes_view.php">Sizes registered</a>
                     </td>
                     <td align="left">
                        <a href = "comments_view.php">Comments view</a
                     <td align="left">
                         </td>
                </tr>
                <tr>
                     <td align="left">
                         &nbsp;
                     </td>
                     <td align="left">
                         &nbsp;
                     <td align="left">
                         </td>
                </tr>
                <tr>
                     <td align="left">

                        <a href = "customers_view.php">Registered Customers</a>
                     </td>
                     <td align="left">
                         <a href = "orders_view.php">Orders view</a>
                     <td align="left">
                         </td>
                </tr>
                <tr>
                     <td align="left">
                         &nbsp;
                     </td>
                     <td align="left">
                         &nbsp;
                     <td align="left">
                         </td>
                </tr>
                <tr>
                     <td align="left">
                     
                     </td>
                     <td align="left">
                     
                     </td>
                </tr>
                <tr>
                     <td align="left">
                         <!--<a href = "view_payment.php">Payment message view</a>-->
                     </td>
                     <td align="left">
                         &nbsp;
                     <td align="left">
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
