<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bazar Entry</title>
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
		Bazar: <br><textarea name="bazar" id="" cols="30" rows="10"></textarea><br>
		Price: <br><input type="number" name="tk"><br>
		
		
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

	 	if($_POST['select']=="1"){

	$bazar=$_POST['bazar'];
	$price=$_POST['tk'];
	
	
	
$sql= "INSERT INTO apple(bazar,tk) VALUES ('$bazar','$price')";
	

	mysqli_query($con, $sql);

}
elseif($_POST['select']=="2"){


	$bazar=$_POST['bazar'];
	$price=$_POST['tk'];
	
	
	
$sql= "INSERT INTO Masum(bazar,price) VALUES ('$bazar','$price')";
	

	mysqli_query($con, $sql);
}
elseif($_POST['select']=="3"){


	$bazar=$_POST['bazar'];
	$price=$_POST['tk'];
	
	
	
$sql= "INSERT INTO tanvir(bazar,price) VALUES ('$bazar','$price')";
	

	mysqli_query($con, $sql);
}
elseif($_POST['select']=="4"){


	$bazar=$_POST['bazar'];
	$price=$_POST['tk'];
	
	
	
$sql= "INSERT INTO antor(bazar,price) VALUES ('$bazar','$price')";
	

	mysqli_query($con, $sql);
}
else{return false;}

 }








?>

	
</body>
</html>