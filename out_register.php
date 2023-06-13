<?php
include("./connect.php");
include 'out_class.php';

$name = $_POST['name'];
$color = $_POST['color'];
$stock_code = $_POST['stock_code'];
$size = $_POST['size'];
$style = $_POST['style'];
$category = $_POST['category'];
$quantity = $_POST['quantity'];

$post_price = $_POST['post_price'];
$post_total = $quantity * $post_price;


// Start Getting Quantity from cloth in table

$sql=mysql_query("select * from cloth_in where stock_code='".$stock_code ."' and size='".$size."'");
$data_count=mysql_num_rows($sql);
$row=mysql_fetch_array($sql);
$quantity_in_store = $row['quantity'];
//$price = $row['price'];

$pre_price = $row['price'];
$pre_total = $quantity * $pre_price;
$benefit = $post_total - $pre_total;

$quantity_needed=$quantity;
$remaining_quantity=$quantity_in_store-$quantity_needed;
$total = $remaining_quantity * $pre_price;
if($quantity_needed>$quantity_in_store){
	header("Location: clothes_out.php?msg=MUCH");
}

elseif($quantity_needed<0 || $quantity_needed==0){
	header("Location: clothes_out.php?msg=INVALID");

}
 else{

	$sql=mysql_query("update cloth_in set quantity='$remaining_quantity', total='$total' where stock_code='".$stock_code ."' and size='".$size."'");


// End Getting Quantity from cloth in table


$out = new out();

$out ->setStock_code($stock_code);
$out ->setName($name);
$out ->setColor($color);
$out ->setSize($size);
$out ->setStyle($style);
$out ->setCategory($category);
$out ->setQuantity($quantity);
$out ->setPre_Price($pre_price);
$out ->setPre_Total($pre_total);
$out ->setPost_Price($post_price);
$out ->setPost_Total($post_total);
$out ->setBenefit($benefit);

$result = $out ->outAdd();
header ("Location: clothes_out_view.php");

/*if ($result) {
    
}
else {
    header ("Location: clothes_out.php?msg=FAILURE");
}*/
}
?>