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
    <SCRIPT language="JavaScript1.2" src="generate_validation.js"></SCRIPT>
    <?php
    include "header.php";
    include "menus.php";
    include "left.php";
    ?>
<div id="body">

<h3 style = 'float: center; font-family: georgia'>Customer Registration Form</h3>

<form action="registration_customer.php" method="POST" name="Form" onsubmit="return validateForm()">
    <table align="center" width="500">
        <tr>
            <td>
<label style="width: 130px">Firstname:</label> <input type="text" size = "25" name="firstname" />
<label style="width: 130px">Lastname:</label> <input type="text" size = "25" name="lastname" />
<label style="width: 130px">Gender:</label> <select name="gender" >
	<option value = "Not selected">--Choose sex--</option>
	<option value = "Male">Male</option>
	<option value = "Female">Female</option>
	</select>
<label style="width: 130px">Phone No:</label> <input type="text" size = "25" name="phone" />
<label style="width: 130px">Email:</label> <input type="text" size = "25" name="email" />
<label style="width: 130px">Username:</label> <input type="text" size = "25" name="username" />
<label style="width: 130px">Password:</label> <input type="password" size = "25" name="password" />
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
