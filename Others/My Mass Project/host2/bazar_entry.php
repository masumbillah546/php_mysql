<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bazar Entry</title>
	<style>
		input{
			width: 80px;
		}
	</style>
</head>
<body>

	<h2>Bazar Entry</h2>




	<form action="" method="post">
		Nmae: <br> <select name="select" id="">
			<option value="">Select Your Name</option>
			<option value="1">Apple</option>
			<option value="2">Masum</option>
			<option value="3">Tanvir</option>
			<option value="4">Antor</option>
		</select><br><br>

		<table border="1" cellspacing="0">
			<tr>
				<th>Bazar</th>
				<th>Price</th>
			</tr>
			<tr>
				<td><input type="text" name="bazar1"></td>
				<td><input type="number" name="tk1"></td>
			</tr>
			<tr>
				<td><input type="text" name="bazar2"></td>
				<td><input type="number" name="tk2"></td>
			</tr>
			<tr>
				<td><input type="text" name="bazar3"></td>
				<td><input type="number" name="tk3"></td>
			</tr>
			<tr>
				<td><input type="text" name="bazar4"></td>
				<td><input type="number" name="tk4"></td>
			</tr>
			<tr>
				<td><input type="text" name="bazar5"></td>
				<td><input type="number" name="tk5"></td>
			</tr>
			<tr>
				<td><input type="text" name="bazar6"></td>
				<td><input type="number" name="tk6"></td>
			</tr>
			<tr>
				<td><input type="text" name="bazar7"></td>
				<td><input type="number" name="tk7"></td>
			</tr>
				
		</table>
		
		<input type="submit" name="submit" value="Submit">
	</form>



	<?php


	Include("dbconfig.php");


	 if(isset($_POST['submit'])){

	 		
	$bazar1=$_POST['bazar1'];
	$price1=$_POST['tk1'];
	$bazar2=$_POST['bazar2'];
	$price2=$_POST['tk2'];
	$bazar3=$_POST['bazar3'];
	$price3=$_POST['tk3'];
	$bazar4=$_POST['bazar4'];
	$price4=$_POST['tk4'];
	$bazar5=$_POST['bazar5'];
	$price5=$_POST['tk5'];
	$bazar6=$_POST['bazar6'];
	$price6=$_POST['tk6'];
	$bazar7=$_POST['bazar7'];
	$price7=$_POST['tk7'];

	$price=[$price1, $price2, $price3, $price4, $price5, $price6, $price7];
	$bazar=[$bazar1, $bazar2, $bazar3, $bazar4, $bazar5, $bazar6, $bazar7];

	for($i=0; $i<count($price); $i++){

		if($bazar[$i]!=null){


	if($_POST['select']=="1"){	
	$sql= "INSERT INTO apple(bazar,tk) VALUES ('$bazar[$i]','$price[$i]')";
	mysqli_query($con, $sql);


}elseif($_POST['select']=="2"){	
	$sql= "INSERT INTO Masum(bazar,price) VALUES ('$bazar[$i]','$price[$i]')";
	mysqli_query($con, $sql);


}elseif($_POST['select']=="3"){	
	$sql= "INSERT INTO tanvir(bazar,price) VALUES ('$bazar[$i]','$price[$i]')";	
	mysqli_query($con, $sql);


}elseif($_POST['select']=="4"){
	$sql= "INSERT INTO antor(bazar,price) VALUES ('$bazar[$i]','$price[$i]')";
	mysqli_query($con, $sql);


}else{return false;}


		}// null checking end

	}//for loop end

}//isset end


?>


<a href="members.php">Members Table</a>
	
</body>
</html>