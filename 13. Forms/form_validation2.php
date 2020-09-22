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


		if($_POST['name']==null || $_POST['age']==null || $_POST['email']==null || $_POST['phone']==null){
			echo "Please Fill your all fields";
		}
			elseif(!preg_match("/^[a-zA-Z ]/", $_POST['name'])){

			echo "Your name is not valid";

		}	
			elseif(!preg_match("/^[0-9]{2}$/", $_POST['age'])){

			echo "Your age is not valid";
		}

			//elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
			elseif(!preg_match("/^[a-zA-Z0-9@]+@[a-zA-Z]+\.[a-zA-Z]{2,4}/",$_POST['email'])){

			echo "your email is not valid";
		}	
			elseif(!preg_match("/^[0-9]{12}/", $_POST['phone'])){

			echo "Your phone is not valid";
		}

		//elseif($_POST['phone'])

		// 	echo "Your name is: ".$_POST['name'];

		// }elseif(preg_match_all("/^[0-9]/", $_POST['age'])){

		// 	echo "Your age is: ".$_POST['age'];
			
			
		// }elseif(preg_match("/[-Z]/", $_POST['name'])){

			
			
		// }elseif(preg_match("/[0-9]/", $_POST['phone'])){

		// 	echo "Your phone no is: ".$_POST['phone'];
			
			
		// }else{
		// 	return false;
		// }
		else{
			echo "<span>All is ok</span>";
		}


	}//$server end

	?>
	
</body>
</html>