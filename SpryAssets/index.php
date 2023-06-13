<?php
session_start();
if(isset ($_SESSION['success']) && $_SESSION['success'] == 'OK'){
?>
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
<title>Online Student Registration System</title>
<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen">

<script type="text/javascript" src="js/jquery-1.6.min.js"></script>
<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/cufon-replace.js" type="text/javascript"></script>
<script src="js/Open_Sans_400.font.js" type="text/javascript"></script>
<script src="js/Open_Sans_Light_300.font.js" type="text/javascript"></script>
<script src="js/Open_Sans_Semibold_600.font.js" type="text/javascript"></script>
<script type="text/javascript" src="js/tms-0.3.js"></script>
<script type="text/javascript" src="js/tms_presets.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script src="js/FF-cash.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {color: #0000CC}
-->
</style>
</head>
<body id="page1">
<!-- header -->
<div class="bg">
  <div class="main">
    <header>
      <div class="row-1">
	  <?php echo "<font color='white' size='6'>Welcome ". $_SESSION['username'] ."</font>"; ?>
        <h1> <a class="logo" href="index.php"></a></h1>
		<br><br><br><img src="images/title.jpg" width="490">
        <form id="search-form" action="search.php" method="POST" enctype="multipart/form-data">
          <fieldset>
            <div class="search-form">
              <input type="text" name="search" onBlur="if(this.value=='') this.value='search'" onFocus="if(this.value =='Type Keyword Here' ) this.value=''" />
              <a href="search.php">Search</a> </div>
          </fieldset>
        </form>
      </div>
      <div class="row-2">
        <nav>
          <ul class="menu">
            <li><a class="active" href="index.php"><img src="icon/home.png" width="55" height="40">Home</a></li>
            <li><a href="history.php">History</a></li>
            <li><a href="welcome.php">Registration</a></li>
            <li><a href="viewall.php">Display</a></li>
			<li><a href="suggestion.php">Suggestion</a></li>
			<li><a href="readannounce.php">Announcement</a></li>
			<li><a href='logout.php'><img src='images/exit.png' width='32' height='32' /></a></li>
            <li class="last-item"><a href="contacts.php">Contact Us</a></li>
          </ul>
        </nav>
      </div>
      <div class="row-3">
        <div class="slider-wrapper">
          <div class="slider">
            <ul class="items">
			<?php
$con = mysql_connect("localhost","root");
mysql_select_db("osrs", $con);
$sql = "select * from picture_tbl";
$result = mysql_query($sql,$con); 
while($row = mysql_fetch_array($result))
{
$date=$row['picture'];
?>
		<li><img src="<?php echo $date;?>" /></li>
             <?php
}
// Retrieve Number of records returned
$records = mysql_num_rows($result);
?>
             <?php
// Close the connection
mysql_close($con);
?>
            </ul>
            <a class="prev" href="#">prev</a> <a class="next" href="#">prev</a> </div>
        </div>
      </div>
    </header>
    <!-- content -->
    <section id="content">
      <div class="padding">
        <div class="wrapper">
          <div class="col-3">
            <div class="indent">
              <h2>Our Mission</h2>
              <p class="color-4 p1">The goal of this project is to provide a readily  accessible and user-friendly system for students to register.</p>
              <div class="wrapper">
                <figure class="img-indent3"><img src="icon/h1.jpg" width="150"/></figure>
                <div class="extra-wrap">
                  <div class="indent2">
                    <p>According to student,reduce ticket money and time,</p>
                    <p>According the school .</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-2">
            <div class="block-news">
              <h3 class="color-4 p2">Announcement </h3>
              <div class="wrapper p2">
			  <marquee direction="up" onClick="stop">
			                    <?php
$con = mysql_connect("localhost","root");
mysql_select_db("osrs", $con);
$sql = "select * from announce_tbl limit 0,3";
$result = mysql_query($sql,$con); 
while($row = mysql_fetch_array($result))
{
$id=$row['id'];
$date=$row['start_date'];
$title=$row['title'];
$text=$row['announce_text'];
?>
                <time class="tdate-1 fleft"><strong></strong></time>
                <div class="extra-wrap">
				<br><?php echo $date;?>
                <br><font color="#0000FF"><u><b> <?php echo $title; ?></b></u></font>
			   <br><b><?php echo $text;?></b>
			   <br>
             <?php
}
// Retrieve Number of records returned
$records = mysql_num_rows($result);
?>
             <?php
// Close the connection
mysql_close($con);
?></div></marquee>
<a class="button-2" href="readannounce.php">Read More</a> </div>
            </div>
          </div>
        </div>
      </div>
    </section>
	
	<p>
	<section id="content">
      <div class="padding">
        <div class="wrapper">
          <div class="col-3">
            <div class="indent">
              <h2>Suggestion Form </h2>
              <p>
			  <SCRIPT language="JavaScript1.2" src="gen_validation.js"></SCRIPT>
<SCRIPT language="JavaScript1.2">
var arrFormValidation=
                    [
			 		[//Firstname
					["alphabetic",
		"Please Enter valid Firstname "
						  ],
						  ["minlen=1",
		"Please Enter Firstname "
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
				[//Email
						   ["minlen=1",
		"Please Enter Email "
						  ], 
						  ["email",
		"Please Enter valid email "
						  ]
						  
                   ],
				   [//Suggestion
						   ["minlen=1",
		"Please Enter Suggestion "
						  ] 
						  
                   ],
            ];
</SCRIPT>
<form action="suggestioninsert.php" method="POST" enctype="multipart/form-data" name="form1" id="form1" onSubmit="return validateForm(this,arrFormValidation);">
<table width="30%" border="0" bgcolor="#CCCCCC">
<tr>
                 <td width="28%" height="50"><span class="style7 style1"><strong>Firstname:</strong></span></td>
                 <td width="72%"><span id="sprytextfield1">
                   <label>
                   <input type="text" name="firstname" id="txtName" placeholder="Firstname here" size="52" />
                   </label>
                 <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
			   
			                  <tr>
                 <td height="46"><span class="style7 style1"><strong>Lastname:</strong></span></td>
                 <td><span id="sprytextfield2">
                   <label>
                   <input name="lastname" type="text" id="txtName" size="52" placeholder="Lastname here"/>
                   </label>
                 <span class="textfieldRequiredMsg">A value is required.</span></span></td>
               </tr>
			   
			    <tr>
                 <td><span class="style8 style1"><strong>Email:</strong></span></td>
                 <td><span id="sprytextfield3">
                   <label>
                   <input type="text" name="e_mail" id="e_mail" placeholder="E_mail here" size="52"/>
                   </label>
                 <span class="textfieldRequiredMsg">A value is required.</span></span></td>
               </tr>
               <tr>
                 <td><span class="style8 style1"><strong>Suggestion:</strong></span></td>
                 <td><span id="sprytextarea1">
                   <label><span id="sprytextarea1">
                   <textarea name="suggestion_text" id="suggestion_text" cols="40" rows="3"></textarea>
                   </span></label>
                 <span class="textareaRequiredMsg">A value is required.</span></span></td>
               </tr>
<tr><td>
<input type="submit" class="button-2" value="Send"/></td><td> 
<input type="reset" class="button-2" value="Clear"/>
</td></tr>
</table>
</form>
<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
//-->
</script>
			  </p>
              <p class="color-4 p1">&nbsp;</p>
              </div>
          </div>
          <div class="col-2">
            <div class="block-news">
              <h3 class="color-4 p2">Suggestion </h3>
              <div class="wrapper p2">
			  <?php
$con = mysql_connect("localhost","root");
mysql_select_db("osrs", $con);
$sql = "SELECT*FROM suggestion_tbl LIMIT 0 ,3";
$result = mysql_query($sql,$con); 
while($row = mysql_fetch_array($result))
{
$id=$row['id'];
$text=$row['suggestion_text'];
$lname=$row['lastname'];
?>
                <time class="tdate-1 fleft"><strong></strong></time>
                <div class="extra-wrap">
                <br><img src="icon/service.png" width="30" height="30"><font color="#0000FF"><b> <?php echo $lname;?>:</b></font>
				<font color="#000000"><b> <?php echo $text;?></b></font>
			   <br>
             <?php
}
// Retrieve Number of records returned
$records = mysql_num_rows($result);
?>
             <?php
// Close the connection
mysql_close($con);
?></div>
<a class="button-2" href="suggetion.php">Read More</a> </div>
            </div>
          </div>
        </div>
      </div>
    </section>
	</p>
	
    <!-- footer -->
    <footer>
      <div class="row-bot">
        <div class="aligncenter">
          <p class="p0">Copyright &copy; All Rights Reserved</p>
          Design by Innocente<br>
          <!-- {%FOOTER_LINK} -->
        </div>
      </div>
    </footer>
  </div>
</div>
<script type="text/javascript">Cufon.now();</script>
<script type="text/javascript">
$(function () {
    $('.slider')._TMS({
        prevBu: '.prev',
        nextBu: '.next',
        playBu: '.play',
        duration: 800,
        easing: 'easeOutQuad',
        preset: 'simpleFade',
        pagination: false,
        slideshow: 3000,
        numStatus: false,
        pauseOnHover: true,
        banners: true,
        waitBannerAnimation: false,
        bannerShow: function (banner) {
            banner.hide().fadeIn(500)
        },
        bannerHide: function (banner) {
            banner.show().fadeOut(500)
        }
    });
})
</script>
</div></body>
</html>
<?php
}
else {
	echo '<script type="text/javascript">alert("Please Login As Adimin");window.location=\'main.php\';</script>';
}
?>