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

            <h3 style = 'float: center; font-family: georgia'>Clothes Edition Form</h3>
            <?php
            $id = $_GET['id'];
            include 'clothes_class.php';
            $cloth = new Clothes();
            $cloth = $cloth ->clothView($id);
            ?>
            <form method="POST" action="clothes_edition.php" enctype="multipart/form-data">
                <label>Stock code: </label>
                <input type="text" name="stock_code" value="<?php echo $cloth->getStock_code(); ?>">
                <label>Cloth Name: </label>
                <input type="text" name="name" value="<?php echo $cloth->getName(); ?>">
                <label>Cloth Color: </label>
                <input type="text" name="color" value="<?php echo $cloth->getColor(); ?>">
                <label>Size: </label>
                <input type="text" name="size" value="<?php echo $cloth->getSize(); ?>">
                <label>Style: </label>
                <input type="text" name="style" value="<?php echo $cloth->getStyle(); ?>">
                <label>Category: </label>
                <select name="category">
                    <option value="Not selected">--Choose Sex--</option>
                    
                    <option value="Men" <?php echo $cloth->getCategory() == "Men" ? "SELECTED" : ""; ?>>Men</option>
                    <option value="Women" <?php echo $cloth->getCategory() == "Women" ? "SELECTED" : ""; ?>>Women</option>
                    <option value="Kids" <?php echo $cloth->getCategory() == "Kids" ? "SELECTED" : ""; ?>>Kids</option>
                </select>
                <label>Picture: </label><input type="file" name="picture" value="<?php echo $cloth->getPicture(); ?>">
                <label>Quantity: </label><input type="text" name="quantity" value="<?php echo $cloth->getQuantity(); ?>">
                <label>Price: </label><input type="text" name="price" value="<?php echo $cloth->getPrice(); ?>">
                <label>Post Price: </label><input type="text" name="post_price" value="<?php echo $cloth->getPost_price(); ?>">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
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
             <?php
}
else {
    header ("Location: login_form.php?msg=loginfirst");
}
?>
