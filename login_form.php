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
<h1>Welcome to Users Login Form</h1>

            <?php
                if (isset ($_GET['msg']) && $_GET['msg'] == 'FAIL'){
                echo "<font color = 'yellow' face = 'georgia'>Incorrect Username or Password!! Try again!</font>";
            }
            ?>
<SCRIPT language="JavaScript1.2" src="gen_validation.js"></SCRIPT>

<form method="POST" action="login.php" name="Form" onsubmit="return  onSubmit="return validateForm(this,arrFormValidation);">
                <table border="0" align="center" style="background-color: #99CCFF; width: 400px;height: 150px; box-shadow: 1px 1px 1px 1px rgb(2,9,9)">
                    <tr>
                        <th>Username:</th>
                        <th>
                            <input type ="text" name ="username" placeholder="Username" required>
                        </th>
                        <tr>
                            <th>Password:</th>
                            <th>
                            <input type ="password" name ="password" placeholder="Password" required>
                            </th>
                        </tr>
                        <tr>
                            <th colspan="2" align="center">
                                <input type ="submit" value="Login" style="display: inline; background: grey;border-radius: 5px" />
                                <input type ="reset" value="Cancel" style="display: inline; background: grey;border-radius: 5px" />
                            </th>
                        </tr>
                </table>
            </form>
 <?php
                if (isset ($_GET['msg']) && $_GET['msg'] == 'loginfirst'){
                echo "<font color = 'yellow' face = 'georgia'>Please, Login First!!!</font>";
            }
            ?>
</div>
<?php
include "right.php";
include "footer.php";
?>
</body>
</html>