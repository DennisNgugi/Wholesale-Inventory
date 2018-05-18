<?php
require "../connection/config.php";

if (isset($_POST['submit'])) {
 $customer_name = $mysqli->escape_string($_POST['customer_name']);
 $date = $mysqli->escape_string($_POST['order_date']);
 $product_name=$mysqli->escape_string($_POST['product_name']);
 $quantity=$mysqli->escape_string($_POST['product_quantity']);
 $sell_price = $mysqli->escape_string($_POST['sell_price']);
 $rate = $mysqli->escape_string($_POST['product_rate']);
 $discount=$mysqli->escape_string($_POST['discount']);
 $paid_amount=$mysqli->escape_string($_POST['paid_amount']);
 $due_amount-=$mysqli->escape_string($_POST['due_amount']);
 $total_discount=$mysqli->escape_string($_POST['total_discount_amount']);
 $grand_total=$mysqli->escape_string($_POST['grand_total_price']);

 $order=$mysqli->query("INSERT INTO orders VALUES(NULL,'$customer_name','$product_name','$date',$sell_price,'$quantity',0,0,0,0,'$paid_amount',0)") or die($mysqli->error());
}
 ?>
