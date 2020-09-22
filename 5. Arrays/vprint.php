<?php


$customers=array();

$customers[]=array("Rahim", "rahim@gmail.com", "01785654");
$customers[]=array("Karim", "karim@gmail.com", "017833654");
$customers[]=array("Mamun", "mamun@gmail.com", "017255424");


echo "<pre>";

//print_r($customers);



foreach($customers as $customer){


	// echo $customer[0]."<br>";
	// echo $customer[1]."<br>";
	// echo $customer[2]."<br>";

	vprintf("Name: %s Email: %s Phones: %s"."<br>", $customer);

}




?>