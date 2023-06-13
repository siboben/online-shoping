<html>
<head>
<title>Online Clothes Shopping</title>
<link rel="shortcut icon" type="image" href="gunners.jpg" />
<link rel="stylesheet" type="text/css" href="style.css">
<script>
    function validateForm ()
    {
        var x = document.forms["Form"]["username"].value
        var y = document.forms["Form"]["password"].value
        if (x == null || x == "")
        {
           alert ("Please! Fill in username fields!!");
           return false;
        }
        else if (y == null || y == ""){
            alert ("Please! Fill in password fields!!");
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
<h1>Welcome to Shop Keeper Login Form</h1>

            <?php
                if (isset ($_GET['msg']) && $_GET['msg'] == 'FAIL'){
                echo "<font color = 'yellow' face = 'georgia'>Incorrect Username or Password!! Try again!</font>";
            }
            ?>
<form method="POST" action="keeper_log.php" name="Form" onsubmit="return validateForm()">
                <table border="0" align="center" style="background-color: #99CCFF; width: 400px;height: 150px; box-shadow: 1px 1px 1px 1px rgb(2,9,9)">
                    <tr>
                        <th>Username:</th>
                        <th>
                            <input type ="text" name ="username" placeholder="Username">
                        </th>
                        <tr>
                            <th>Password:</th>
                            <th>
                            <input type ="password" name ="password" placeholder="Password">
                            </th>
                        </tr>
                        <tr>
                            <th colspan="2" align="center">
                                <input type ="submit" value="Login" style="display: inline" >
                                <input type ="reset" value="Cancel" style="display: inline" >
                            </th>
                        </tr>
                </table>
            </form>

            <?php
                if (isset ($_GET['msg']) && $_GET['msg'] == 'loginfirst'){
                echo "<font color = 'yellow' face = 'georgia'>Please, Login as registered Shop keeper!!!</font>";
            }
            ?>
</div>
<?php
include "right.php";
include "footer.php";
?>
</body>
</html>