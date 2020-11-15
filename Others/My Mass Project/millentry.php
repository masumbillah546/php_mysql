<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mill Entry</title>
</head>
<body>




	<form action="" method="post">
		Date: <br><input type="number" name="date"><br>
		Apple: <br><input type="number" name="apple"><br>
		Masum: <br><input type="number" name="masum"><br>
		Tanvir: <br><input type="number" name="tanvir"><br>
		Antor: <br><input type="number" name="antor"><br>
		<input type="submit" name="submit" value="Submit">
	</form>

	<br>
	<br>

	<a href="members.php">Members Table</a>





	<?php

	$host= "localhost";
	$user="root";
	$pass="";
	$db="mess";

	$con = mysqli_connect($host, $user, $pass, $db);


	 if(isset($_POST['submit'])){

	$id=$_POST['date'];
	$apple=$_POST['apple'];
	$masum=$_POST['masum'];
	$tanvir=$_POST['tanvir'];
	$antor=$_POST['antor'];
	
	
$sql= "INSERT INTO atm(id,apple,masum,tanvir,antor) VALUES ('$id','$apple','$masum','$tanvir','$antor')";
	

	mysqli_query($con, $sql);

 }








?>

	
</body>
</html>