<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Email validation</title>
</head>
<body>
	<h2>Email Validation</h2>
	<form action="" method="post">
		<input type="text" name="email" placeholder="Type your email"><br>
		<input type="text" name="email2" placeholder="Re-type your email"><br>
		<input type="submit" name="submit" value="Check"><br>
	</form>


<?php

	if(isset($_POST['submit'])){
		
		extract($_POST);


		if($email==null || $email2==null){
			echo "Null value not allowed";
		}
		elseif ($email!=$email2) {
			echo "Your Email dosn't match";
		}
		elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			echo "Your email is not valid";
		}
		else{
			echo "Your email is valid";
		}




	}





?>

	
</body>
</html>