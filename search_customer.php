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
          
            <h3 style = 'float: center; font-family: georgia'>Detailed information of the customer</h3>
            <?php
            include 'connect.php';
            $phone = $_POST['phone'];
          
          $query = "select * from customer where phone = '$phone'";
          $result = mysql_query($query);
          $fetch = mysql_fetch_array($result);
            ?>
            <table border ="0" align ="center" width="500">
                <tr>
                   <td align="left">Firstname: &nbsp;<?php echo $fetch['firstname'];?></td>
                </tr>
                <tr>
                    <td align="left">Lastname: &nbsp;<?php echo $fetch['lastname'];?></td>
                </tr>
                <tr>
                   <td align="left">Gender: &nbsp;<?php echo $fetch['gender'];?></td>
                </tr>
                <tr>
                   <td align="left">Phone number: &nbsp;<?php echo $fetch['phone'];?></td>
                </tr>
                <tr>
                    <tr>
                   <td align="left">Email: &nbsp;<?php echo $fetch['email'];?></td>
                </tr>
                   <td align="left">Username &nbsp;<?php echo $fetch['username'];?></td>
                </tr>
              
            </table>
           <a href="home.php" style="float: center">Back</a>
</div>
<?php
include "right.php";
include "footer.php";
?>
</body>
</html>