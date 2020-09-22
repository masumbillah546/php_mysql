<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Email Validation</title>
</head>
<body>


	<form action="" method="post">
		
		<input type="text" name="email" placeholder="Enter your email"><br>
		<input type="text" name="remail" placeholder="Confirm your email"><br>
		<input type="submit" name="submit" value="Validate"><br>

	</form>

	<?php


	if(isset($_POST['submit'])){

	$email=$_POST['email'];
	$remail=$_POST['remail'];


	if($email==null || $remail==null){
		echo "Null valu not allowed";
	}
	elseif($email!=$remail){
		echo "Your confirm email not match";
	}
	elseif(!preg_match("/^[a-zA-Z0-9]+@[a-zA-Z][a-zA-Z]{2,4}/", $email)){
		echo "Your email is not Valid";
	}
	
	else{
		echo "Your email is valid";
	}


	}
	else{
		return false;	
	}


	?>
	
</body>
</html>