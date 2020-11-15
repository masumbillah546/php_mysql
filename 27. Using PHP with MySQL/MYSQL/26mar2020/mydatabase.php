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

	<br>
	<br>

	<a href="studentslist.php">Students List</a>


	


	<?php


	if(isset($_POST['submit'])){

	$id=$_POST['id'];
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];

	include("dbconfig.php");
	
	$sql= "INSERT INTO students2(id, name, email, phone) VALUES ('$id', '$name', '$email', '$phone')";
	

	mysqli_query($con, $sql);

	}







?>

	
</body>
</html>