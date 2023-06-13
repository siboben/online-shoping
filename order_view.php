<?php
session_start();

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

            <h3 style = 'float: center; font-family: georgia'>Detailed information of the received order</h3>
            <?php

include 'order_class.php';

$id = $_GET['id'];

$order = new order();
$order = $order ->orderView($id);
?>
            <table border ="0" align ="center" width="400">
                <tr>
                    <td align="left">Order date: <?php echo $order ->getOrdering_date(); ?></td>
                </tr>
                <tr>
                    <td align="left">Phone: <?php echo $order ->getPhone(); ?></td>
                </tr>
                <tr>
                    <td align="left">E_mail: <?php echo $order ->getEmail(); ?></td>
                </tr>
                <tr>
                   <td align="left">Name: <?php echo $order ->getName(); ?></td>
                </tr>
                <tr>
                   <td align="left">Color: <?php echo $order ->getColor(); ?></td>
                </tr>
                <tr>
                <tr>
                   <td align="left">Size: <?php echo $order ->getSize(); ?></td>
                </tr>
                <tr>
                   <td align="left">Style: <?php echo $order ->getStyle(); ?></td>
                </tr>
                <tr>
                   <td align="left">Category: <?php echo $order ->getCategory(); ?></td>
                </tr>
                <tr>
                   <td align="left">Quantity: <?php echo $order ->getQuantity(); ?></td>
                </tr>
                <tr>
                    <td align="left" style="font-weight: bold; font-family: comic sans ms">Price: <?php echo $order ->getPrice(); ?>Rwf</td>
                </tr>
                <tr>
                   <td align="left">Total money paid: <?php echo $order ->getTotal(); ?>Rwf</td>
                </tr>
                <tr>
                   <td align="left">District: <?php echo $order ->getDistrict(); ?></td>
                </tr>
                <tr>
                    <td align="left">Account number: <?php echo $order ->getAccount(); ?></td>
                </tr>
                <tr>
                    <td align="left">Shipping option: <?php echo $order ->getShipping(); ?></td>
                </tr>
            </table>
            <br />
           
            <a href="orders_view.php" style="float: left">Back</a>
</div>
<?php
include "right.php";
include "footer.php";
?>
</body>
</html>