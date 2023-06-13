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

            <h3 style = 'float: center; font-family: georgia'>List of Registered Customers</h3>

<?php
include 'customer_class.php';
$cust = new customer();
$customers = $cust->customersView();
?>
            <table style = 'width: auto;border-collapse: collapse' align="center">
<tr>
<th style = 'border: 2px solid blue;font-family: georgia;padding: 2px;'>No</th>
<th style = 'border: 2px solid blue;font-family: georgia;padding: 2px;'>Firstname</th>
<th style = 'border: 2px solid blue;font-family: georgia;padding: 2px;'>Lastname</th>
<th style = 'border: 2px solid blue;font-family: georgia;padding: 2px;'>Gender</th>
<th style = 'border: 2px solid blue;font-family: georgia;padding: 2px;'>Phone</th>
<th style = 'border: 2px solid blue;font-family: georgia;padding: 2px;'>E-mail</th>
<th style = 'border: 2px solid blue;font-family: georgia;padding: 2px;'>Username</th>
<th style = 'border: 2px solid blue;font-family: georgia;padding: 2px;'>Action</th>
<?php
$count = 1;
foreach ($customers as $st) {
    ?>
	<tr>
            <td style = 'border: 2px solid blue;font-family: georgia'> <?php echo $count; ?></td>
            <td style = 'border: 2px solid blue;font-family: georgia'><?php echo $st->getFname(); ?></td>
            <td style = 'border: 2px solid blue;font-family: georgia'><?php echo $st->getLname(); ?></td>
            <td style = 'border: 2px solid blue;font-family: georgia'><?php echo $st->getGender(); ?></td>
            <td style = 'border: 2px solid blue;font-family: georgia'><?php echo $st->getPhone(); ?></td>
            <td style = 'border: 2px solid blue;font-family: georgia'><?php echo $st->getEmail(); ?></td>
            <td style = 'border: 2px solid blue;font-family: georgia'><?php echo $st->getUsername(); ?></td>
            <td style = 'border: 2px solid blue;text-align: center'>
                <a href = "customer_delete.php?id=<?php echo $st->getId(); ?>"  onclick="return confirm('Do you really want to delete this customer?')"><img src = 'delete.png' width="15"/>Delete</a></td>
        </tr>
        <?php
	$count ++;
	}
        ?>
</table><br />
<a href = 'admin_rights.php' style="float: left">Back</a><br />
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

