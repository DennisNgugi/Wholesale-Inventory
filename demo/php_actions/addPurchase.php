<?php
require "../connection/config.php";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $supplier_name= $_POST['supplier_name'];
  $product_name=$_POST['product_name'];
  $quantity= $_POST['product_quantity'];
  $details= $_POST['details'];
  $rate= $_POST['product_rate'];
  $date = date("Y-m-d");
  $insert = $mysqli->query("INSERT INTO purchase VALUES(NULL,'$product_name','$supplier_name','$date','$details','$quantity','$rate',0)");

}
else{
echo "failed to submit data";
}

 ?>
