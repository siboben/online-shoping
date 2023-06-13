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
          ?>  <a href ="user_logout.php" style ="float: right; padding: 20px 20px;">Logout</a><br />

            <h3 style = 'float: center; font-family: georgia'>List of Registered clothes</h3>
            <?php
          include 'clothes_class.php';
          $clothes = new Clothes();
          $clothes = $clothes ->clothesView();
            ?>
            <table border ="1" align ="center" style="border-collapse: collapse;border: 3px solid white">
                <tr style="background: #006699">
                    <th style="border: 3px solid white">No</th>
                    <th style="border: 3px solid white">Stock code</th>
                    <th style="border: 3px solid white">Cloth Name</th>
                    <th style="border: 3px solid white">Cloth Color</th>
                    <th style="border: 3px solid white">Size</th>
                    <th style="border: 3px solid white">Style</th>
                    <th style="border: 3px solid white">Category</th>
                    <th style="border: 3px solid white">Quantity</th>
                    <th style="border: 3px solid white">Price</th>
                    <th style="border: 3px solid white">Total</th>
                    <th colspan="3" style="border: 3px solid white">Function</th>
                </tr>
                <?php
                $count=1;
                $counter = 0;
                $counting = 0;
                foreach ($clothes as $clothes) {
                    $counting += $clothes ->getTotal();
                    $counter++;
                ?>
                <tr>
                    <td style="border: 2px solid white"><?php echo $count; ?></td>
                    <td style="border: 2px solid white"><?php echo $clothes ->getStock_code(); ?></td>
                    <td style="border: 2px solid white"><?php echo $clothes ->getName(); ?></td>
                    <td style="border: 2px solid white"><?php echo $clothes ->getColor(); ?></td>
                    <td style="border: 2px solid white"><?php echo $clothes ->getSize(); ?></td>
                    <td style="border: 2px solid white"><?php echo $clothes ->getStyle(); ?></td>
                    <td style="border: 2px solid white"><?php echo $clothes ->getCategory(); ?></td>
                    <td style="border: 2px solid white"><?php echo $clothes ->getQuantity(); ?></td>
                    <td style="border: 2px solid white"><?php echo $clothes ->getPrice(); ?></td>
                    <td style="border: 2px solid white"><?php echo $clothes ->getTotal(); ?></td>
                    <td style="border: 2px solid white;text-align: center">
                       <a href ="cloth_views.php?id=<?php echo $clothes ->getId(); ?>"><img src="gunners.jpg" width="30"></a>
                    </td>

                    <td style="border: 2px solid white;text-align: center">
                       <a href ="clothes_edit.php?id=<?php echo $clothes ->getId(); ?>"><img src="edit.png" width="30"></a>
                    </td>
                    <td style="border: 2px solid white;text-align: center">
                        <a href ="clothes_delete.php?id=<?php echo $clothes ->getId(); ?>"  onclick="return confirm('Do you really want to delete this cloth?')"><img src="delete.png" width="30"></a>
                    </td>
                </tr>
                <?php
                $count ++;
                }
                ?>
                <tr><td colspan=9 style="color: white">TOTAL AMOUNT SPENT:</td><td style="color: white"><?php echo $counting . "Rwf"; ?></td></tr>
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
