<?php



$states=array("Florida");

$state="Ohio";

$checking = is_array($states) ? "Yes, its an arary" : "No, its not array";

echo $checking."<br>";


$checking2 = is_array($state) ? "Yes, its an arary" : "No, its not array";

echo $checking2;



?>