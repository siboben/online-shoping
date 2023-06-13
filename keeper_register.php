<html>
<head>
<title>Online Clothes Shopping</title>
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

<h3 style = 'float: center; font-family: georgia'>Shop Keeper Registration Form</h3>
<table border="0" align="center" width="415">
    <tr>
        <td>
<form action="keeper_registration.php" method="POST">
<label>Firstname:</label> <input type="text" size = "25" name="firstname" />
<label>Lastname:</label> <input type="text" size = "25" name="lastname" />
<label>Gender:</label> <select name="gender" >
	<option value = "Not selected">--Choose sex--</option>
	<option value = "Male">Male</option>
	<option value = "Female">Female</option>
	</select>
<label>Phone No:</label> <input type="text" size = "25" name="phone" />
<label>Email:</label> <input type="text" size = "25" name="email" />
<label>Username:</label> <input type="text" size = "25" name="username" />
<label>Password:</label> <input type="password" size = "25" name="password" />
<label><input type="submit" value="Register" style="float: inherit"/></label>&nbsp;
<label><input type = "reset" value = "Cancel" style="float: inherit"></label>
</form>
        </td>
    </tr>

</table>
<a href="admin_rights.php" style="float: left">Back</a>
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
