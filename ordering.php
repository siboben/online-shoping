<?php
session_start();
$user = $_SESSION['username'];
include 'order_class.php';
include 'connect.php';

$phone = $_POST['phone'];
$email = $_POST['email'];
$name = $_POST['name'];
$color = $_POST['color'];
$size = $_POST['size'];
$style = $_POST['style'];
$category = $_POST['category'];
$quantity = $_POST['quantity'];
$price = $_POST['post_price'];

$district = $_POST['district'];
$account = $_POST['account'];
$shipping = $_POST['shipping_options'];
$date_exp = $_POST['expired_date'];
$today_date = $_POST['ordering_date'];

$q = "SELECT * FROM customer WHERE username = '$user'";
$r = mysql_query($q);
$f = mysql_fetch_array($r);
$phone_stored = $f['phone'];
$email_stored = $f['email'];
$fname = $f['firstname'];
$lname = $f['lastname'];

if ($phone != $phone_stored || $email != $email_stored) {
        
       header ("Location: ordering_form.php?msg=NOT");

}

else{


$sql=mysql_query("select * from cloth_in where name = '$name' and color = '$color' and size = '$size' and style = '$style' and category = '$category'");
$row=mysql_fetch_array($sql);
$quantity_in_store = $row['quantity'];
$price_stored = $row['price'];
$quantity_ordered=$quantity;
$remaining_quantity=$quantity_in_store-$quantity_ordered;
$total_stored = $remaining_quantity * $price_stored;

if($quantity_ordered>$quantity_in_store){
	header("Location: ordering_form.php?msg=TOO");
}

elseif($quantity_ordered < 0 || $quantity_ordered == 0){
	header("Location: ordering_form.php?msg=INVALID");

}

else{

$accounte = "select * from bpr.account where accountn = '$account'";
$accounting = mysql_query($accounte);
$accounter = mysql_fetch_array($accounting);
$accountn = $accounter['accountn'];
$total = $quantity*$price;
$amount = $accounter['amount'];
$phb= $accounter['phone'];

/*$quer= mysql_query("select * from customer where username ='$user'");
$queri = mysql_fetch_array($quer);
$phc=$queri['phone'];*/


if($accountn != $account) {
    header("Location: ordering_form.php?msg=ACCOUNT");
}

elseif($phb != $phone){
    header("Location: ordering_form.php?msg=haker");
}
elseif ($amount < $total) {
        //echo "Your account balance is low! Please recharge your account first";
        header("Location: ordering_form.php?msg=BALANCE");
    }

    else {

$amount_remained = $amount - $total;

$select_account = mysql_query("select * from bpr.account where accountn = 461233391411");
$amounto = mysql_fetch_array($select_account);

$amount_stored = $amounto['amount'];
$amount_gained = $amount_stored + $total;

$update_compte = mysql_query("update bpr.account set amount = '$amount_gained' where accountn = 461233391411");

$account_update = mysql_query("update bpr.account set amount = '$amount_remained' where accountn = '$account'");

$sql=mysql_query("update cloth_in set quantity='$remaining_quantity', total='$total_stored' where name = '$name' and color = '$color' and size = '$size' and style = '$style' and category = '$category'");


$order = new order();

$order ->setOrdering_date($today_date);
$order ->setExpired_date($date_exp);
$order ->setPhone($phone);
$order ->setEmail($email);
$order ->setName($name);
$order ->setColor($color);
$order ->setSize($size);
$order ->setStyle($style);
$order ->setCategory($category);
$order ->setQuantity($quantity);
$order ->setPrice($price);
$order ->setTotal($total);
$order ->setDistrict($district);
$order ->setAccount($account);
$order ->setShipping($shipping);

$result = $order ->orderAdd();

$_SESSION['tot'] = $total;
$_SESSION['account'] = $account;
$_SESSION['ship'] = $shipping;

header ("Location: order_success.php");
 }
}
}

?>