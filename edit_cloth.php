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
    $id = $_GET['id'];
    include 'connect.php';
    $query = "SELECT * FROM cloth_in WHERE id = '$id'";
    $result = mysql_query($query);
    $row = mysql_fetch_array($result);
    ?>
<h1>Cloth Edition Form</h1>
<form method="POST" action="edition_cloth.php">

                <label>Stock code: </label>
                <input type="text" name="stock_code" value="<?php echo $row['stock_code']; ?>">
                <label>Cloth Type: </label>
                <input type="text" name="type" value="<?php echo $row['cloth_type']; ?>">
                <label>Cloth Color: </label>
                <input type="text" name="color" value="<?php echo $row['color']; ?>">
                <label>Category: </label>
                <input type="text" name="category" value="<?php echo $row['category'];?>">
                <label>Gender: </label>
                <select name="gender">
                    <option value="Not selected">--Choose Sex--</option>
                    <option value="Male" <?php echo $row['gender'] == Male ? "SELECTED" : ""; ?>>Male</option>
                    <option value="Female" <?php echo $row['gender'] == Female ? "SELECTED" : ""; ?>>Female</option>
                </select>
                <label>Quantity: </label><input type="text" name="quantity" value="<?php echo $row['quantity']; ?>">
                <label>Price: </label><input type="text" name="price" value="<?php echo $row['price']; ?>">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <label><input type="submit" value="Save"></label>&nbsp;
                <label><input type="reset" value="Cancel"></label>
</form>
</div>
<?php
include "right.php";
include "footer.php";
?>
</body>
</html>