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
		<input type="submit" name="submit" value="Submit">
	</form>





	<?php

	if(isset($_POST['submit'])){

	$id=$_POST['id'];
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];




	$host= "localhost";
	$user="root";
	$pass="";
	$db="students";

	$con = mysqli_connect($host, $user, $pass, $db);// or die( "Somthing problem with mySQL");

	// if($mysql){
	// 	echo "Successfully connection with MySQL";
	// }

	// if(!$mysql){
	// 	die( "Somthing problem with mySQL");
	// }

	
	$sql= "INSERT INTO students(id, name, email, phone) VALUES ('$id', '$name', '$email', '$phone')";
	

	mysqli_query($con, $sql);

	}







?>

	
</body>
</html>