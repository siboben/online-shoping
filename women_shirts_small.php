
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

            <h3 style = 'float: center; font-family: georgia'>List of Registered Small Shirts for Women</h3>
            <?php
          include 'clothes_class.php';
          $clothe = new Clothes();
          $clothe = $clothe ->womenShirtSmallView();
            ?>
            <table border ="1" align ="center" style="border-collapse: collapse;border: 3px solid white">
                <tr>
                    <th style="border: 3px solid white">No</th>
                    <th style="border: 3px solid white">Cloth Name</th>
                    <th style="border: 3px solid white">Cloth Color</th>
                    <th style="border: 3px solid white">Size</th>
                    <th style="border: 3px solid white">Style</th>
                    <th style="border: 3px solid white">Category</th>
                    <th style="border: 3px solid white">Price</th>
                    <th style="border: 3px solid white">Functions</th>

                </tr>
                <?php
                $count=1;
                foreach ($clothe as $clothe) {
                ?>
                <tr>
                    <td style="border: 2px solid white"><?php echo $count; ?></td>
                    <td style="border: 2px solid white"><?php echo $clothe ->getName(); ?></td>
                    <td style="border: 2px solid white"><?php echo $clothe ->getColor(); ?></td>
                    <td style="border: 2px solid white"><?php echo $clothe ->getSize(); ?></td>
                    <td style="border: 2px solid white"><?php echo $clothe ->getStyle(); ?></td>
                    <td style="border: 2px solid white"><?php echo $clothe ->getCategory(); ?></td>
                    <td style="border: 2px solid white"><?php echo $clothe ->getPost_price(); ?>Rwf</td>
                    <td style="border: 2px solid white;text-align: center">
                       <a href ="cloth_view.php?id=<?php echo $clothe ->getId(); ?>"><img src="gunners.jpg" width="20">Details</a>
                    </td>
                </tr>
                <?php
                $count ++;
                }
                ?>
            </table>
</div>
<?php
include "right.php";
include "footer.php";
?>
</body>
</html>
