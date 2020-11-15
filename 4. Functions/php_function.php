<?php

	function myfunction(){

	echo	"Copyright All rights reserved 2020"."<br>";

	}

	// myfunction();
	// myfunction();
	// myfunction();

function fullname($fast,$last){

	return "$fast $last";

	}

	echo fullname("Rahim","Karim");




	//function default pramiter

	function welcome($name,$greeting="Good Morning"){
		echo "$greeting $name";
	}

	//welcome("Rahim","Good night")




	function fun_sum($num1, $num2){
		//echo $total=$num1+$num2;
		 $total=$num1+$num2;
		 return $total;
		
	}

		// $output=fun_sum(15,20);
		// echo $output;
	echo fun_sum(15,20);

?>