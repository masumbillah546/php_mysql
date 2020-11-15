<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="" method="post">
		ID: <br><input type="number" name="id"><br>
		Name: <br><input type="text" name="name"><br>
		Email: <br><input type="text" name="email"><br>
		Phone: <br><input type="number" name="phone"><br>
		<input type="submit" name="submit" value="Submit"><br><br>
	</form>

	<?php

	if(isset($_POST['submit'])){

	$id=$_POST['id'];
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];


	$con = new mysqli("localhost", "user", "", "db_name");// or die( "Somthing 

	
	$con->query("INSERT INTO students_table(id, name, email, phone) VALUES ('$id', '$name', '$email', '$phone')");

	echo "Data inserted successfully..";
	

	}


?>
	
</body>
</html>