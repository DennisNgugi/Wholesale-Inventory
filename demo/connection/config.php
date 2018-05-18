<?php
// database connection settings

$host = "localhost";
$user = "root";
$pass = "";
$database="wholesale_inventory";

$mysqli= new mysqli($host,$user,$pass,$database) or die($mysqli->error);
 ?>
