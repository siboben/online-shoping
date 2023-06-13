<?php 
//require_once('Connections/CMS.php'); ?>
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
<title>Civil Wedding Management System</title>
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {
	color: #000000;
	font-weight: bold;
}
-->
</style>
</head>
<body>
<SCRIPT language="JavaScript1.2" src="generate_validation.js"></SCRIPT>
<SCRIPT language="JavaScript1.2">
var arrFormValidation=
             [
			 		[//NIC
						  
						  ["num",
		"Please Enter valid NIC "
						  ],
						  ["minlen=11",
		"Please Enter valid NIC "
						  ]
						 				  
                   ],
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
					 
					 [//Birthdate
						  
						  ["minlen=1",
		"Please Select BirthDate "
						  ]
						  
                   ],
				   [//Gender
						  
						  
                   ],
                   
				   [//MaritalStatus
						  
						  
                   ],
				   [//Morthername
					       ["alphabetic",
		"Please Enter valid Morthername "
						  ],
						  ["minlen=1",
		"Please Enter Morthername "
						  ] 
					
                     ],
					 [//Fathername
					       ["alphabetic",
		"Please Enter valid Fathername "
						  ],
						  ["minlen=1",
		"Please Enter Fathername "
						  ] 
					
                     ],
					 [//Nationality
					       ["alphabetic",
		"Please Enter valid Nationality "
						  ],
						  ["minlen=1",
		"Please Enter Nationality "
						  ] 
					
                     ],
				   [//Cell Code
						  ["minlen=1",
		"Please Enter Cell Code "
						  ] 
					
                     ],
				   
				   
				   [//Picture
						  
					 ["minlen=1",
		"Please Select Picture "
						  ]	
                   ]
            ];
</SCRIPT>
<form action="husband_add.php" method="POST" enctype="multipart/form-data" name="form1" id="form1" onSubmit="return validateForm(this,arrFormValidation);">
<table border="0" align="left" bordercolor="#CCCCCC" bgcolor="#CCCCCC" width="33%">
<caption>
<strong><font color="blue">Welcome to Bridegroom registration form</font></strong>
</caption>
<tr>
<td colspan="2" bgcolor="#33FFCC">
<label><strong><font color="#000000">Click on Residence before Continue</font></strong> </label>
<a href="sector.php"><strong>Residence</strong></a></td>
</tr>
<tr>
  <td colspan="2" bgcolor="#FFFFFF"><span class="style1">Ignore First five(5) numbers For NIC </span></td>
  </tr>
<td width="130"><font color="#0000FF"><strong>NIC:</strong></font></td>
<td width="244"><span id="sprytextfield1"><input type="text" name="NIC" placeholder="National Identity Card here" size="25">
<span class="textfieldRequiredMsg">A value is required.</span>
<!--Ignore first five(5) numbers -->
</span></td>
</tr>
<tr>
<td><font color="#0000FF"><strong>First name:</strong></font></td>
<td><span id="sprytextfield2"><input type="text" name="firstname" placeholder="first name here" size="25">
<span class="textfieldRequiredMsg">A value is required.</span></span></td>
</tr>
<tr>
<td><font color="#0000FF"><strong>Last name:</strong></font></td>
<td><span id="sprytextfield3"><input type="text" name="lastname" placeholder="last name here" size="25">
<span class="textfieldRequiredMsg">A value is required.</span></span></td>
</tr>
<tr>
  <td><font color="#0000FF"><strong>
    <label for="taskStartDate">Birthdate:</label>
  </strong></font></td>
  <td><span id="sprytextfield4">
  <input type="date" id="taskStartDate" name="DOB" data-bind="datepicker: startDate, datepickerOptions: { minDate: new Date(), dateFormat:'dd/mm/yy' }"   class="text ui-widget-content ui-corner-all" />	  </td>
<span class="textfieldRequiredMsg">A value is required.</span>  </tr>
<tr>
<td><font color="#0000FF"><strong>Gender:</strong></font></td>
<td><select name="sex" size="1" id="sex">
  <option>Sex</option>
<?PHP
$n = array("Select","Male","Female");
for ($i = 1;$i<=2;$i ++) {
echo "<option>$n[$i]</option>";
}
?>
</select></td></tr>
<tr>
<td><font color="#0000FF"><strong>Morther name:</strong></font></td>
<td><span id="sprytextfield5"><input type="text" name="mothername" placeholder="Morther name here" size="25">
<span class="textfieldRequiredMsg">A value is required.</span></span></td>
</tr>
<tr>
<td><font color="#0000FF"><strong>Father name:</strong></font></td>
<td><span id="sprytextfield6"><input type="text" name="fathername" placeholder="Father name here" size="25">
<span class="textfieldRequiredMsg">A value is required.</span></span></td>
</tr>
<tr>
<td><font color="#0000FF"><strong>Marital Status:</strong></font></td>
<td><select name="marital_status" size="1" id="marital_status">
  <option>Marital Status</option>
<?PHP
$n = array("Select","Married","Divorced","Widower","Widow");
for ($i = 1;$i<=4;$i ++) {
echo "<option>$n[$i]</option>";
}
?>
</select></td>
</tr>
<tr>
<td><font color="#0000FF"><strong>Nationality:</strong></font></td>
<td><span id="sprytextfield7"><input type="text" name="nationality" placeholder="Nationality here" size="25">
<span class="textfieldRequiredMsg">A value is required.</span></span></td>
</tr>
<tr>
<td><font color="#0000FF"><strong>Cell:</strong></font></td>
<td><span id="sprytextfield8"><input type="text" name="cell_code" placeholder="Cell Code here" size="25">
<span class="textfieldRequiredMsg">A value is required.</span></span></td>
</tr>
<tr>
<td><font color="#0000FF"><strong>Picture:</strong></font></td>
<td>
<input type="file" name="picture" /></td>

<tr>
<td colspan="2"><img src="icon/save.png" width="32" height="32"/><input type="submit" value="Register"><input type="reset" value="Cancel"></td>
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
var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7");
var sprytextfield8 = new Spry.Widget.ValidationTextField("sprytextfield8");
//-->
</script>
</body>
</html>