<?php
    /* session_start();
     if(isset ($_SESSION['login_successful']) && $_SESSION['login_successful'] == 'YES'){*/
?>
<html>
<head>
<title>Clothing Store Management System</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php
    include "header.php";
    include "menus.php";
    include "left.php";
    ?>
    <div id = "body">
    <?php
            $p = $_GET['page'];
            $page = $p.".php";
            if (file_exists($page))
                include $page;
            else
                include "body.php";
            ?>
    </div>
    <?php
    include "right.php";
    include "footer.php";
    ?>
</body>
</html>
  <?php
/*}
else {
    header ("Location: admin_login.php");
}*/
?>