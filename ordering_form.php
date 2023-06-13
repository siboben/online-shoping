<?php
error_reporting(0);
     session_start();
     if(isset ($_SESSION['login_successful']) && $_SESSION['login_successful'] == 'YES'){

$unit_price = $_SESSION['unit_price'];
$name = $_SESSION['name'];
$color = $_SESSION['color'];
$size = $_SESSION['size'];
$style = $_SESSION['style'];
$category = $_SESSION['category'];

?>

<?php
$today_date=date("d-m-Y h:i:s",strtotime(" +1 hours"));
$date_exp=date("d-m-Y h:i:s",strtotime(" +5 days +1 hours"));
?>
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
          <?php
        echo "<h3 style = 'float: left; font-family: georgia'>Welcome " . $_SESSION['username'] . "</h3>";
          ?>  <a href ="user_logout.php" style ="float: right;padding: 20px 20px;">Logout</a><br />


            <h3 style = 'float: center; font-family: georgia'>This is ordering Form</h3>
            <table border="0" align="center">
                <?php

                if (isset ($_GET['msg']) && $_GET['msg'] == 'TOO'){
                echo "<font color = 'yellow' face = 'georgia' style='float: center'>Sorry! You have ordered too much quantity!! Try again!</font>";
                }

                if (isset ($_GET['msg']) && $_GET['msg'] == 'INVALID'){
                echo "<font color = 'yellow' face = 'georgia' style='float: center'>Sorry! You have entered invalid number, Please,enter number greater than 0 !!! </font>";
                }
                if (isset ($_GET['msg']) && $_GET['msg'] == 'NOT'){
                echo "<font color = 'yellow' face = 'georgia' style='float: center'>Please try to use your own registered Phone number and Email!!</font>";
                }
                if (isset ($_GET['msg']) && $_GET['msg'] == 'haker'){
                echo "<font color = 'yellow' face = 'georgia' style='float: center'> Please, use your own account!!</font>";
                }
                if (isset ($_GET['msg']) && $_GET['msg'] == 'ACCOUNT'){
                echo "<font color = 'yellow' face = 'georgia' style='float: center'>Please your account number is incorrect!! Try again!!</font>";
                }
                if (isset ($_GET['msg']) && $_GET['msg'] == 'BALANCE'){
                echo "<font color = 'yellow' face = 'georgia' style='float: center'>Your account balance is low! Please recharge your account first!!</font>";
                }
            ?>
                <tr>
                    <td>
                        <form method="post" action="ordering.php" name="Form" onsubmit="return validateForm()">
                            <!--<label>Ordering: </label>--><input type ="hidden" name ="ordering_date" value="<?php echo $today_date; ?>" readonly="">
                            <!-- <label>Deadline: </label>--><input type ="hidden" name ="expired_date" value="<?php echo $date_exp; ?>" readonly="">
                <label>Phone number: </label><input type ="text" name ="phone" required placeholder ="Phone number">
                <label>Email address: </label><input type ="text" name ="email" placeholder ="Email address">
                <label> Cloth Name: </label><input type ="text" name ="name" value="<?php print $name; ?>" readonly ="">
                <label> Color: </label><input type ="text" name ="color" value="<?php print $color; ?>" readonly ="">
                <label>Size: </label><input type ="text" name ="size" value="<?php print $size; ?>" readonly ="">
                <label>Style: </label><input type ="text" name ="style" value="<?php print $style; ?>" readonly ="">
                <label>Category</label><input type ="text" name ="category" value="<?php print $category; ?>" readonly ="">
                <label>Quantity: </label><input type ="text" name ="quantity" required placeholder ="Quantity">
                <label>Price: </label><input type ="text" name ="post_price" value="<?php print $unit_price; ?> " readonly ="" required placeholder ="Price">
                <label>Address: </label><input type ="text" name ="district" required placeholder ="District">
                <label>Account number: </label><input type ="text" name ="account" required placeholder ="Account number">
                <label>Shipping options: </label>
                <select name="shipping_options">
                    <option>--Select option--</option>
                    <option>Pickup From Seller</option>
                    <option>Sending to Customer</option>
                </select>
                <label><input type="submit" value="Order Now" style="background: grey;border-radius: 5px"></label>
                <label><input type="reset" value="Cancel" style="background: grey;border-radius: 5px"></label>
                </form>
                    </td>
                </tr>
                </table>
         
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
