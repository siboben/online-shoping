<?php
     session_start();
     if(isset ($_SESSION['login_successful']) && $_SESSION['login_successful'] == 'YES'){
$tot = $_SESSION['tot'];
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
          ?>  <a href ="user_logout.php" style ="float: right;padding: 20px 20px;">Logout</a><br />
<?php
include "connect.php";
$query = "SELECT * FROM payment ORDER BY id desc";
$result = mysql_query($query);

?>
<h2>List of confirmation payment messages</h2>
<table border="1" align="center">
<tr>
    <th>S.No</th>
    <th>Phone number</th>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Sent money</th>
    <th>Date sent</th>
    <th colspan="2">Action</th>
</tr>
<?php
$count = 1;
$total = 0;
while ($row = mysql_fetch_array($result)) {
    $total += $row['money'];

?>
<tr>
    <td><?php echo $count;?></td>
    <td><?php echo $row['phone']; ?></td>
    <td><?php echo $row['firstname']; ?></td>
    <td><?php echo $row['lastname']; ?></td>
    <td><?php echo $row['money']; ?>Rwf</td>
    <td><?php echo $row['date']; ?></td>
    <!--<td>
        <a href="message_view.php?id=<?php echo $row['id']; ?>">Details</a>
    </td>-->
    <td>
        <a href="message_delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Do you really want to delete this record?')"><img src="delete.png" height="15" width="15">Delete</a>
    </td>
</tr>
<?php
$count ++;
}
?>
<tr>
    <td colspan="8" align="center">Total amount of received money is <b><?php echo $total; ?>Rwf</b></td>
</table>

<a href="admin_rights.php">Back</a>
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
