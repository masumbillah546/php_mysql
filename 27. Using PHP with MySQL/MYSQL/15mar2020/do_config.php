<?php

	$host= "localhost";
	$user="root";
	$pass="";
	$db="wdpf44";

	$mysql = mysqli_connect($host, $user, $pass, $db);

	// if($mysql){
	// 	echo "Successfully connection with MySQL";
	// }

	if(!$mysql){
		die( "Somthing problem with mySQL");
	}

	









?>