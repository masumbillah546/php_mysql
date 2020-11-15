<?php

include('db_config.php');

$id=$_GET['id'];

$sql="DELETE FROM products WHERE productCode='$id'";

$mysqli->query($sql);
header("location: products.php");


?>