<?php
require_once "../connection/config.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $product_name = $mysqli->escape_string($_POST['product_name']);
  $product_description = $mysqli->escape_string($_POST['product_description']);
  $product_quantity = $mysqli->escape_string($_POST['product_quantity']);
  $sell_price = $mysqli->escape_string($_POST['sell_price']);
  $supplier_price = $mysqli->escape_string($_POST['supplier_price']);
  $categoryName = $mysqli->escape_string($_POST['categoryName']);
  $supplierName = $mysqli->escape_string($_POST['supplierName']);

  $products = $mysqli->query("INSERT INTO products VALUES(NULL,'$product_name','$categoryName','$supplierName','$sell_price','$supplier_price','$product_description','$product_quantity',CURRENT_TIMESTAMP)");
}

 ?>
