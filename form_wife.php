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
<title>Online Civil Wedding Management System</title>

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
<body >
              <h2 class="p0">Wife Form.</h2>
<SCRIPT language="JavaScript1.2" src="gen_validation.js"></SCRIPT>
<SCRIPT language="JavaScript1.2">
var arrFormValidation=
[
			 		[//NIC
						  
						  ["num",
		"Please Enter valid NIC "
						  ],
						  ["minlen=16",
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
					 [//Morthername
						  ["minlen=1",
		"Please Select BirthDate "
						  ]
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
<form action="addwife.php" method="POST" enctype="multipart/form-data" name="form1" id="form1" onSubmit="return validateForm(this,arrFormValidation);">
<table border="0" align="left" bordercolor="#CCCCCC" bgcolor="#CCCCCC" width="100%">
<tr>
<td width="120"><font color="#0000FF"><strong>NIC:</strong></font></td>
<td width="218"><span id="sprytextfield1"><input type="text" name="bNIC" placeholder="National Identity Card here" size="25">
<span class="textfieldRequiredMsg">A value is required.</span></span></td>
</tr>
<tr>
<td><font color="#0000FF"><strong>First name:</strong></font></td>
<td><span id="sprytextfield2"><input type="text" name="bfirstname" placeholder="first name here" size="25">
<span class="textfieldRequiredMsg">A value is required.</span></span></td>
</tr>
<tr>
<td><font color="#0000FF"><strong>Last name:</strong></font></td>
<td><span id="sprytextfield3"><input type="text" name="blastname" placeholder="last name here" size="25">
<span class="textfieldRequiredMsg">A value is required.</span></span></td>
</tr>
<tr>
  <td><font color="#0000FF"><strong>
    <label for="taskStartDate">Birthdate:</label>
  </strong></font></td>
  <td><span id="sprytextfield4">
  <input type="date" id="taskStartDate" name="bDOB" data-bind="datepicker: startDate, datepickerOptions: { minDate: new Date(), dateFormat:'dd/mm/yy' }"   class="text ui-widget-content ui-corner-all" /></span></td>
<span class="textfieldRequiredMsg">A value is required.</span>
  </tr>
<tr>
<td><font color="#0000FF"><strong>Mother name:</strong></font></td>
<td><span id="sprytextfield5"><input type="text" name="bmothername" placeholder="Morther name here" size="25">
<span class="textfieldRequiredMsg">A value is required.</span></span></td>
</tr>
<tr>
<td><font color="#0000FF"><strong>Father name:</strong></font></td>
<td><span id="sprytextfield6"><input type="text" name="bfathername" placeholder="Father name here" size="25">
<span class="textfieldRequiredMsg">A value is required.</span></span></td>
</tr>
<tr>
<td><font color="#0000FF"><strong>Nationality:</strong></font></td>
<td><span id="sprytextfield7"><input type="text" name="bnationality" placeholder="Nationality here" size="25">
<span class="textfieldRequiredMsg">A value is required.</span></span></td>
</tr>
<tr>
<td><font color="#0000FF"><strong>Cell:</strong></font></td>
<td><span id="sprytextfield8">
<select name="bcell_code" size="1" id="bcell_code">
  <option>---------Cell_Code--------</option>
<?php
$server="localhost";
$user="root";
$pass="";
mysql_connect($server,$user,$pass)or die("Unable to connect".mysql_error());
mysql_select_db("cwms")or die ("No such Database".mysql_error());
$query="Select * from cell order by cell_name";
$result=mysql_query($query);
if($result&&(mysql_num_rows($result)>0))
{	
while($a=mysql_fetch_array($result))
{
$option=sprintf('<option value="%s">%s</option>',$a['id'],$a['cell_name']);
echo("$option\n");
}
}
else
{
echo("<option>No Cell find</option>\n");
}
mysql_close();
?></select>
<span class="textfieldRequiredMsg">A value is required.</span></span></td>
</tr>
<tr>
<td><font color="#0000FF"><strong>Picture:</strong></font></td>
<td>
<input type="file" name="bpicture" /></td>
<tr></tr>
<tr>
<td colspan="2"><input type="submit"  value="Register"><input type="reset"  value="Cancel"></td>
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
      </div>
    </footer>
  </div>
</div>
<script type="text/javascript">Cufon.now();</script>
</body>
</html>