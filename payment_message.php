<?php
     session_start();
     if(isset ($_SESSION['login_successful']) && $_SESSION['login_successful'] == 'YES'){
$tot = $_SESSION['tot'];
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

            <h3 style = 'float: center; font-family: georgia'>Payment message form</h3>

            <?php
    if(isset ($_GET['msg']) && $_GET['msg'] == 'FAIL'){
        echo "<font color = 'red'>The message not submitted!! Try again</font>";
    }
    ?>
    <form method="POST" action="paying.php">
    <label>Phone: </label><input type="text" name="phone" required placeholder="Phone">
    <label>Firstname: </label><input type="text" name="firstname" required placeholder="Firstname">
    <label>Lastname: </label><input type="text" name="lastname" required placeholder="Lastname">
    <label>Money Sent: </label><input type="text" name="money" value="<?php echo $tot; ?>" readonly ="">
    <input type="hidden" name="date" required value="<?php echo date("Y-m-d"); ?>">
    <label><input type="submit" value="Send"></label>&nbsp;
    <label><input type="reset" value="Cancel"></label>
    </form>

<br /><br />
<?php
    if(isset ($_GET['msg']) && $_GET['msg'] == 'NOT'){
        echo "<font color = 'red'>You are not alllowed to send the message!</font>";
    }
    ?>
<br /><br />
<?php
if(isset ($_GET['msg']) && $_GET['msg'] == 'FAILURE'){
        echo "<font color = 'red'>The entered money doesn't meet the requirements</font>";
    }
    ?>
<a href="order_success.php">Back</a>
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
