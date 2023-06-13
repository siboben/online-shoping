<?php
/*
session_start();
$unit_price = $_SESSION['unit_price'];
$name = $_SESSION['name'];
$color = $_SESSION['color'];
$size = $_SESSION['size'];
$style = $_SESSION['style'];
$category = $_SESSION['category'];
//print $unit_price."<br />";
*/
?>
<html>
<head>
<title>Bank Service</title>
<link rel="shortcut icon" type="image" href="gunners.jpg" />
<link rel="stylesheet" type="text/css" href="style.css">
<script>
    function validateForm(){
        var x = document . forms["Form"]["email"] . value
        var atpos = x.indexOf("@");
        var dotpos = x.lastIndexOf(".");
        if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length){
            alert ("Invalid email!!");
            return false;
        }
    }
</script>
</head>
<body>
    <?php
    include "header.php";
    include "menus.php";
    include "left.php";
    ?>
<div id="body">

<h3 style = 'float: center; font-family: georgia'>Edit Customer Form</h3>
<?php
          include 'connect.php';
          $id = $_GET['id'];
          $quer = "select * from account where id='$id'";
          $query = mysql_query($quer);
          $row = mysql_fetch_array($query);
            ?>


<form action="edition.php" method="POST" name="Form" onsubmit="return validateForm()">
    <table align="center" width="500">
        <tr>
            <td>
<label style="width: 130px">Firstname:</label> <input type="text" size = "25" name="firstname" value= "<?php echo $row['firstname']; ?>"/>
<label style="width: 130px">Lastname:</label><input type="text" name="lastname" value="<?php echo $row['lastname']; ?>" />
<label style="width: 130px">Gender:</label> <select name="gender">
	<option value = "Not selected">--Choose sex--</option>
        <option value = "Male" <?php echo $row['gender'] == "Male" ? "SELECTED" : ""; ?>>Male</option>
	<option value = "Female" <?php echo $row['gender'] == "Female" ? "SELECTED" : ""; ?>>Female</option>
	</select>
<label style="width: 130px">Phone No:</label> <input type="text" size = "25" name="phone" value="<?php echo $row['phone']; ?>" />
<label style="width: 130px">Email:</label> <input type="text" size = "25" name="email" value="<?php echo $row['email']; ?>" />
<label style="width: 130px">Identity Card:</label> <input type="text" size = "25" name="identity" value="<?php echo $row['idcard']; ?>" />
<label style="width: 130px">Account N:</label> <input type="text" size = "25" name="account" value="<?php echo $row['accountn']; ?>" />
<label style="width: 130px">Amount:</label> <input type="text" size = "25" name="amount" value="<?php echo $row['amount']; ?>" />
<input type="hidden" name="id" value="<?php echo $id; ?>">
<label style="width: 130px"><input type="submit" value="Register"/></label>
<label style="width: 130px"><input type = "reset" value = "Cancel"></label>
            </td>
        </tr>
    </table>
</form>
<?php
if (isset ($_GET['msg']) && $_GET['msg'] == 'TRY') {
    echo "<font style ='color: yellow; font-family: georgia'>Registration failed!! Try again" . "</font>";
}
?>
</div>
<?php
include "right.php";
include "footer.php";
?>
</body>
</html>
