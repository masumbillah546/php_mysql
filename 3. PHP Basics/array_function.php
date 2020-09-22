<?php


$brand=["Nokia", "Samsung","Apple"];

	echo count($brand);

	echo "<hr>";

	echo implode(" - ", $brand);

	echo "<hr>";





	echo "<pre>";
	print_r($brand);

	echo "<hr>";

	array_pop($brand);
	//echo array_pop($brand);

	array_shift($brand);
	//echo array_shift($brand);

	array_unshift($brand,"Symphony");
	//echo array_unshift($brand,"Symphony");

	print_r($brand);



	$mobile=[16,35,20];


	$combine=array_combine($brand,$mobile);
	echo "<pre>";
	print_r($combine);

 


?>