

<h2>Anonymous Function</h2>


<?php


$a=15;

$example=function(){

	global $a;
	$a+=100;
	echo $a;

};

	 $example();
	//echo $a;





?>