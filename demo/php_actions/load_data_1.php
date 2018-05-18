<?php
 require "../connection/config.php";

 if(isset($_POST['product_id'])){
   $product_id= $_POST['product_id'];
   $sql = $mysqli->query("SELECT product_quantity,sell_price,product_id FROM products WHERE product_id='$product_id'");

   while($info=$sql->fetch_array()){
     echo $info['product_quantity'];
        }

 } else{
   echo 0;
 }
 ?>
