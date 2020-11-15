<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form Validation</title>
	<style>
		span{
			background-color: green;
			color: white;
			font-size: 30px;
		}
	</style>
</head>
<body>

	<form action="" method="post">
		
		<input type="text" name="name" placeholder="Your name"><br>
		<input type="text" name="age" placeholder="Your age"><br>
		<input type="text" name="email" placeholder="Your email"><br>
		<input type="text" name="phone" placeholder="Your phone"><br>
		<input type="submit" name="submit" value="Submit">

	</form><br>
	<?php

	if($_SERVER["REQUEST_METHOD"]=='POST'){

		extract($_POST);

		// if(empty($name) || empty($age) || empty($email) || empty($phone)){
		// 	echo "Please Fill your all fields";
		// }
		if(!preg_match("/^[a-zA-Z]/", $name)){

			echo "Your name is not valid";
		}	
		elseif(!preg_match("/^[0-9]{1,2}$/", $age)){

			echo "Your age is not valid";
		}
			//elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
		elseif(!preg_match("/[a-z0-9]+@[a-z]+\.[a-zA-Z]{3}/",$email)){

			echo "your email is not valid";
		}	
		elseif(!preg_match("/^[0-9]{1,11}$/", $phone)){

			echo "Your phone is not valid";
		}
		else{
			echo "<span>All is ok</span>";
		}


	}//$server end

	?>
	
</body>
</html>