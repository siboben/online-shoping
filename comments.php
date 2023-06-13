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

<h3 style = 'float: center; font-family: georgia'>Welcome to suggestions/comments Form</h3>

<form action="commenting.php" method="POST" name="Form" onsubmit="return validateForm()">
    <table align="center" width="500">
        <tr>
            <td>
<label style="width: 130px">Names:</label> <input type="text" size = "25" name="names" />
<!--<label style="width: 130px">Gender:</label> <select name="gender" >
	<option value = "Not selected">--Choose sex--</option>
	<option value = "Male">Male</option>
	<option value = "Female">Female</option>
	</select>-->
<label style="width: 130px">Phone No:</label> <input type="text" size = "25" name="phone" />
<label style="width: 130px">Email:</label> <input type="text" size = "25" name="email" />
<label style="width: 130px">Comments:</label>
<textarea name="comments" cols="40" rows="8"></textarea>
<label style="width: 130px"><input type="submit" value="Send"/></label>
<label style="width: 130px"><input type = "reset" value = "Cancel"></label>
            </td>
        </tr>
    </table>
</form>
<?php
if (isset ($_GET['msg']) && $_GET['msg'] == 'NOT') {
    echo "<font style ='color: yellow; font-family: georgia'>Your comment is not sent!! Try again" . "</font>";
}
?>
<h2 style="font-family: georgia">These are available comments and suggestions</h2>
 <?php

                include 'connect.php';

                $query = "SELECT * FROM comments order by id desc";
                $result = mysql_query($query);
                $counter = 0;
                while($row=  mysql_fetch_array($result)){

                ?>
            <table style="width: auto; background-color: #99CCFF;">
                <tr>
                <td>
                    <table>
                        <tr>
                            <th align="left">Names:</th> <td><?php echo $row['names']; ?></td>
                        </tr>
                        <tr>
                            <th align="left">Email:</th> <td><?php echo $row['email']; ?></td>
                        </tr>
                        <tr>
                            <th align="left">Phone:</th> <td><?php echo $row['phone']; ?></td>
                        </tr>
                        <tr>
                            <th align="left">Comments:</th> <td style="text-align: justify"><?php echo $row['comments'];?></td>
                        </tr>
                    </table>
                </td>
                </tr>
            </table>
            <br><br>
             <?php
            $counter++;
                }
                if ($counter ==0){
                   echo "<b>No comment</b> available<br>";
               }
               else{

                }
                ?>
                
                <a href="contact.php">Back</a>
</div>
<?php
include "right.php";
include "footer.php";
?>
</body>
</html>
