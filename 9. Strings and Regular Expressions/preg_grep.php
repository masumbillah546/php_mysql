<?php


 $foods = array("pasta", "steak","Apple","fish", "potatoes");
 $food = preg_grep("/^p/", $foods);
 print_r($food);


?>