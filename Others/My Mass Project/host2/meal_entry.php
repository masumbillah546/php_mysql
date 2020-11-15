<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mill Entry</title>
	<style>
		input{
			width: 60px;
		}
	</style>
</head>
<body>

	<h2>Mill Entry</h2>




	<form action="" method="post">
		<table border="1" cellspacing="0">

		<tr>
			<th>Date</th>
			<th>Apple</th>
			<th>Masum</th>
			<th>Tanvir</th>
			<th>Antor</th>
		</tr>
		<tr>
			<td><input type="number" name="date"></td>
			<td><input type="number" name="apple"></td>
			<td><input type="number" name="masum"></td>
			<td><input type="number" name="tanvir"></td>
			<td><input type="number" name="antor"></td>
		</tr>

		</table>
		<br><input type="submit" name="submit" value="Submit"><br><br>
	</form>



	<?php

	include("dbconfig.php");


	 if(isset($_POST['submit'])){

	$id=$_POST['date'];
	$apple=$_POST['apple'];
	$masum=$_POST['masum'];
	$tanvir=$_POST['tanvir'];
	$antor=$_POST['antor'];

	if($id!=null){
	
	
$sql= "INSERT INTO atm(id,apple,masum,tanvir,antor) VALUES ('$id','$apple','$masum','$tanvir','$antor')";
	

	mysqli_query($con, $sql);

}

 }



?>


<a href="members.php">Members Table</a>

	
</body>
</html>