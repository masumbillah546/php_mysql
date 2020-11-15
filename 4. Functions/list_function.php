<?php


$colors=array("Blue","Red","Green");
list($color1, $color2, $color3)=$colors;

echo $color1;
echo "<br>";


function userInfo(){

	$user[]="Masum Billah";
	$user[]="Dhaka";
	$user[]="masumbillah@gmail.com";

	return $user;

}


	list($name, $add, $email)= userInfo();

	echo $name."<br>";
	echo $email."<br>";
	echo $add."<br>";
	



?>