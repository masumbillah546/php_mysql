<!DOCTYPE html>
<html>
<head>
	<title>Form Validation</title>
</head>
<body>
	<h2>Form Validation</h2>

	<form action="" method="post">

		<input type="text" name="name" placeholder="enter your name"><br>
		<input type="text" name="email" placeholder="enter your email">
		<input type="submit" name="submit" value="Submit"><br><br>
		
	</form>


	<?php


	if(isset($_POST['submit'])){

		extract($_POST);

		if($name==null || $email==null){
			return false;
		}
		elseif (!preg_match("/^[a-zA-Z ]{4,8}$/", $name)) {
			echo "Name lenth must be 4-8 characters";
		}
		elseif (!preg_match("/^[a-zA-Z0-9]+@[a-zA-Z]+\.[a-zA-Z]/", $email)) {
			echo "This Email invalid, @ must be add";
		}
		else{
			echo "This Name and Email are valid";
		}



	}



	?>

</body>
</html>