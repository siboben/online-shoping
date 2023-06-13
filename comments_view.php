<?php
     session_start();
     if(isset ($_SESSION['login_successful']) && $_SESSION['login_successful'] == 'YES'){
?>
<html>
<head>
<title>Online Clothes Shopping</title>
<link rel="shortcut icon" type="image" href="gunners.jpg" />
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body
    <?php
    include "header.php";
    include "menus.php";
    include "left.php";
    ?>
<div id="body">
          <?php
        echo "<h3 style = 'float: left; font-family: georgia'>Welcome " . $_SESSION['username'] . "</h3>";
          ?>  <a href ="user_logout.php" style ="float: right;padding: 20px 20px;">Logout</a><br />


            <h3 style = 'float: center; font-family: georgia'>List of available comments and suggestions</h3>
 <?php

                include 'connect.php';

                $query = "SELECT * FROM comments order by id desc";
                $result = mysql_query($query);
                $counter = 0;
                while($row=  mysql_fetch_array($result)){
               
                ?>
            <table bgcolor="#99CCFF" style="width: 780px" align="center">
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
                            <th align="left">Comment:</th> <td><?php echo $row['comments'];?></td>
                        </tr>
                        <tr>
                            <th align="center" colspan="2"><a href="comment_delete.php?id=<?php echo $row['id']?>" onclick="return confirm('Do you really want to delete this comment?')">Delete suggestion</a></th>
                        </tr>
                        
                    </table>
                    
                </td>
                </tr>
                <?php
            $counter++;
                }
                if ($counter ==0){
                   echo "<b>No comment</b> available<br>";
               }
               else{
                   
                }
                ?>
                <tr>
                    <th align="left"><b><?php echo $counter;?> Comment(s)</b> available</th>
</tr>
            </table>
            <br><br>
            

<br />

			<a href="admin_rights.php" style="float: left">Back</a>
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
