<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

?>
<html>
<head>
<title>Online Clothes Shopping</title>
<link rel="shortcut icon" type="image" href="gunners.jpg" />
<link rel="stylesheet" type="text/css" href="style.css">

<script type="text/javascript" src="js/jquery-1.6.min.js"></script>
<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/cufon-replace.js" type="text/javascript"></script>
<script src="js/Open_Sans_400.font.js" type="text/javascript"></script>
<script src="js/Open_Sans_Light_300.font.js" type="text/javascript"></script>
<script src="js/Open_Sans_Semibold_600.font.js" type="text/javascript"></script>
<script src="js/FF-cash.js" type="text/javascript"></script>

<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <?php
    include "header.php";
    include "menus.php";
    include "left.php";
    ?>
<div id="body">

<h3 style = 'float: center; font-family: georgia'>Customer Registration Form</h3>
<SCRIPT language="JavaScript1.2" src="gen_validation.js"></SCRIPT>
<SCRIPT language="JavaScript1.2">
var arrFormValidation=
[
					[//Firstname
					       ["alphabetic",
		"Please Enter valid Firstname "
						  ],
						  ["minlen=1",
		"Please Enter First name "
						  ] 
					
                     ],
					 
					 [//Lastname
					       ["alphabetic",
		"Please Enter valid Lastname "
						  ],
						  ["minlen=1",
		"Please Enter Lastname "
						  ] 
					
                     ],
					 [
					 
					 ],
					 [//Phone
						  
						  ["num",
		"Please Enter valid Phone "
						  ],
						  ["minlen=10",
		"Please Enter valid Phone "
						  ]
						 				  
                   ],
				   [//email
				   ["minlen=1",
				   "Please Enter Email"
				   ],
				   ["email",
				   "Please Enter Valid Email"
				   ]
				   ],
					 [//Username
					       ["alphabetic",
		"Please Enter valid Username "
						  ],
						  ["minlen=1",
		"Please Enter Username "
						  ] 
					
                     ],
				   [//Password
						  ["minlen=1",
		"Please Enter Password "
						  ] 
					
                     ],
            ];
</SCRIPT>
<form action="registration_customer.php" method="POST" name="form1" id="form1" onSubmit="return validateForm(this,arrFormValidation);">
    <table align="center" width="500">
        <tr><td>
<label style="width: 130px">Firstname:</label></td><td> <span id="sprytextfield1"><input type="text" size = "25" name="firstname" />
<span class="textfieldRequiredMsg">A value is required.</span></span></td></tr><tr><td>
<label style="width: 130px">Lastname:</label></td><td> <span id="sprytextfield2"><input type="text" size = "25" name="lastname" />
<span class="textfieldRequiredMsg">A value is required.</span></span></td></tr><tr><td>
<label style="width: 130px">Gender:</label></td><td> <select name="gender" >
	<option value = "Not selected">--Choose sex--</option>
	<option value = "Male">Male</option>
	<option value = "Female">Female</option>
	</select></td></tr><tr><td>
<label style="width: 130px">Phone No:</label></td><td> <span id="sprytextfield3"><input type="text" size = "25" name="phone" />
<span class="textfieldRequiredMsg">A value is required.</span></span></td></tr><tr><td>
<label style="width: 130px">Email:</label></td><td> <span id="sprytextfield4"><input type="text" size = "25" name="email" />
<span class="textfieldRequiredMsg">A value is required.</span></span></td></tr><tr><td>
<label style="width: 130px">Username:</label></td><td><span id="sprytextfield5"> <input type="text" size = "25" name="username" />
<span class="textfieldRequiredMsg">A value is required.</span></span></td></tr><tr><td>
<label style="width: 130px">Password:</label></td><td><span id="sprytextfield6"><input type="password" size = "25" name="password" />
<span class="textfieldRequiredMsg">A value is required.</span></span></td></tr><tr><td colspan="2">
<label style="width: 130px"><input type="submit" value="Register"/></label>
<label style="width: 130px"><input type = "reset" value = "Cancel"></label>
            </td>
        </tr>
    </table>
</form>
<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6");
//-->
</script>
</div>
<?php
include "right.php";
include "footer.php";
?>
<script type="text/javascript">Cufon.now();</script>
</body>
</html>
