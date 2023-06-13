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
            <h3 style = 'float: center; font-family: georgia'>List of outgoing clothes</h3>
            <?php
          include 'out_class.php';
          $out = new out();
          $outs = $out ->outsView();
            ?>
            <table border ="1" align ="center" style="border-collapse: collapse;width: auto;border: 3px solid blue">
                <tr>
                    <th style="border: 2px solid blue">No</th>
                    <th style="border: 2px solid blue">Cloth Name</th>
                    <th style="border: 2px solid blue">Cloth Color</th>
                    <th style="border: 2px solid blue">Size</th>
                    <th style="border: 2px solid blue">Style</th>
                    <th style="border: 2px solid blue">Category</th>
                    <th style="border: 2px solid blue">Quantity</th>
                   <!-- <th style="border: 2px solid blue">Pre Price</th>
                    <th style="border: 2px solid blue">Pre Total</th>-->
                    <th style="border: 2px solid blue">Post Price</th>
                    <th style="border: 2px solid blue">Post Total</th>
                    <th style="border: 2px solid blue">Benefit</th>
                </tr>
                <?php
                $count=1;
                $counter = 0;
                $spent = 0;
                $gained = 0;
                foreach ($outs as $out) {
                    $spent += $out ->getPre_Total();
                    $gained += $out ->getPost_Total();
                    $profit = $gained - $spent;
                    $counter++;
                ?>
                <tr>
                    <td style="border: 2px solid blue"><?php echo $count; ?></td>
                    <td style="border: 2px solid blue"><?php echo $out ->getName(); ?></td>
                    <td style="border: 2px solid blue"><?php echo $out ->getColor(); ?></td>
                    <td style="border: 2px solid blue"><?php echo $out ->getSize(); ?></td>
                    <td style="border: 2px solid blue"><?php echo $out ->getStyle(); ?></td>
                    <td style="border: 2px solid blue"><?php echo $out ->getCategory(); ?></td>
                    <td style="border: 2px solid blue"><?php echo $out ->getQuantity(); ?></td>
                   <!-- <td style="border: 2px solid blue"><?php echo $out ->getPre_Price(); ?>Rwf</td>
                    <td style="border: 2px solid blue"><?php echo $out ->getPre_Total(); ?>Rwf</td>-->
                    <td style="border: 2px solid blue"><?php echo $out ->getPost_Price(); ?>Rwf</td>
                    <td style="border: 2px solid blue"><?php echo $out ->getPost_Total(); ?>Rwf</td>
                    <td style="border: 2px solid blue"><?php echo $out ->getBenefit(); ?>Rwf</td>
                </tr>
                <?php
                $count ++;
                }
                ?>
                <tr style="border: 0px solid red" bgcolor="#99CCFF"><td colspan=4>TOTAL AMOUNT SPENT:</td><td style="color: green"><?php echo $spent . "Rwf"; ?></td></tr>
                <tr style="border: 0px solid red" bgcolor="#99CCFF"><td colspan=4>TOTAL AMOUNT GAINED:</td><td style="color: green"><?php echo $gained . "Rwf"; ?></td></tr>
                <tr style="border: 0px solid red" bgcolor="#99CCFF"><td colspan=4>TOTAL BENEFIT:</td><td style="color: green"><?php echo $profit . "Rwf"; ?></td></tr>
            </table>
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
