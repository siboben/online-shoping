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

            <h3 style = 'float: center; font-family: georgia'>List of clothes types available in our shop</h3>
            <?php
          include 'connect.php';
          $quer = "select * from type";
          $query = mysql_query($quer);
            ?>
            <table border ="1" align ="center" style="border-collapse: collapse">
                <tr>
                    <th style="border: 2px solid blue">No</th>
                    <th style="border: 2px solid blue">Type Name</th>
                    <th colspan="1" style="border: 2px solid blue">Function</th>
                </tr>
                <?php
                $count = 1;
                while($row = mysql_fetch_array($query)) {
                ?>
                <tr>
                    <td style="border: 2px solid blue"><?php echo $count; ?></td>
                    <td style="border: 2px solid blue"><?php echo $row['type_name']; ?></td>
                    <td style="border: 2px solid blue">
                        <a href ="type_delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Do you really want to delete this record?')"><img src="delete.png" width="15">Delete</a>
                    </td>

                </tr>
                <?php
                $count ++;
                }
                ?>
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
