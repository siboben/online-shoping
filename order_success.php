<?php
     session_start();
     if(isset ($_SESSION['login_successful']) && $_SESSION['login_successful'] == 'YES'){
         
     $tot = $_SESSION['tot'];
     
     $shipping = $_SESSION['ship'];

 $date_now = date('d');
$dateTest=$date_now+3;
if($dateTest>30){
    $dateRest=$dateTest-30;
    $newMonth=date("m")+1;
    $newYear=date('Y');
    /*
    if($newMonth>12){
        $monthRest=$newMonth - 12;
        $newyear=date("Y")+1;
    }
    */
   $datePart=date("m-Y"); 
   $date_exp = $dateRest."-".$newMonth."-".$newYear;
  // print "Exp date1 is ".$date_exp."<br>";
}else{
$datePart=date("m-Y");
$date_exp = $dateTest."-".$datePart;
//print "Exp date is ".$date_exp."<br>";

}
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
          ?>
            <a href ="customer_logout.php" style ="padding: 20px 20px;float:right">Logout</a><br /><br /><br />

<p style = ' font-family: georgia;font-style: italic'>Dear customer, you are successful submit your order.</p><br><br>
<p style = 'font-family: georgia;'><b><?php echo $tot. "Rwf"; ?></b> is removed from your account number:<br>
    
    
    Shipping option is<b> <?php echo $shipping; ?></b><br>
<br /><br /><br />
You will be informed by phone for how you will get your clothes
   <br /><br />
</p>
    <p style = 'font-family: georgia; font-style: italic; font-weight: bold'>You are welcome again to purchase to our online shop!!! </p>
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
    header ("Location: customer_login.php?msg=loginfirst");
}
?>

