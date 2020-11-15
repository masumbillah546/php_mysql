<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<title>Bazar</title>
	  <link rel="stylesheet" href="css/bootstrap.min.css">
	  <link rel="stylesheet" href="css/style.css">
	  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	  <script src="js/jquery.min.js"></script>
	  <script src="js/bootstrap.min.js"></script>
	<style>

.bazarentry{
	width: 100%;


}
.bazarentry form{
	width: 80%;
	padding: 10%;
	padding-top: 0;
	
}
.bazarentry  input{
	width: 130px;
	
	
}
.bazarentry table td{

	width: 100px;	
	
}
.sname{
	height: 30px;
	background-color: #F4E0E0;
	font-size: 110%;
}
table{
	padding: 0;
}




	</style>

</head>
<body>

	<div class="body">
				<div class="mynav">
					<div class="box"><a href="index.php">Meal Entry</a></div>
					<div class="box"><a href="bazar.php">Bazar Entry</a></div>
					<div class="box"><a href="apple_bazar.php">Apple's Bazar</a></div>
					<div class="box"><a href="masum_bazar.php">Masum's Bazar</a></div>
					<div class="box"><a href="tanvir_bazar.php">Tanvir's Bazar</a></div>
					<div class="box"><a href="antor_bazar.php">Antor's Bazar</a></div>
					<div class="box"><a href="result.php">Result</a></div>
					<div class="box"><a href="#">Rent Entry</a></div>
					<div class="box"><a href="#">Rent Table</a></div>
				</div>


						<br>
						<br>
						<br>
						<br>
						<br>
						<br>

<!----------------------------------------------------------------------------------->




	<div class="bazarentry">
	

	

	<form action="" method="post">
		<h1>Bazar Entry</h1>
		<br> <select class="sname" name="select" id="">
			<option value="">Please Select Your Name</option>
			<option value="1">Apple</option>
			<option value="2">Masum</option>
			<option value="3">Tanvir</option>
			<option value="4">Antor</option>
		</select><br><br>
		<!-- Date: <br><input type="text"><br><br> -->

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
		
		<input class="btn-success btnC" type="submit" name="submit" value="Submit">
	</form>

</div>

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

	<!----------------------------------------------------------------------------------->



	

	<div id="apple" class="apple">
		<h1>Bazar table</h1><hr>

	<h2>Apple's Bazar</h2>


	<table border="1" cellspacing="0" cellpadding="5">
		<tr>
			<th>Bazar</th>
			<th>Price</th>
			
		</tr>
	

	<?php


	include("dbconfig.php");

	$get = mysqli_query($con, "SELECT * FROM apple");

			$a=0;
			$m=0;
			$t=0;
			$o=0;

		while ($row = mysqli_fetch_array($get)) {


				echo "<tr>";
				//echo "<td>".$row['id']."</td>";

				
				echo "<td>".$row['bazar']."</td>";
				
				echo "<td>".$row['tk']."</td>";
			
							
				echo "</tr>";

				 $a+=$row['tk'];
				
				//break;

				
				
		}

	 echo "<tr>
		<th>Total</th>
	 	<td>$a</td>
	
	 	</tr>";
	 	echo "<hr>;"


	?>
	
	</table>

	</div>

	<!---------------------------------------------------------------------------------->

	<div id="masum" class="masum">

	<h2>Masum's Bazar</h2>

	<table border="1" cellspacing="0" cellpadding="5">
		
		<tr>
			<th>Bazar</th>
			<th>Price</th>
			
		</tr>
	

	<?php


	include("dbconfig.php");

	$get = mysqli_query($con, "SELECT * FROM masum");

			$a=0;
			$m=0;
			$t=0;
			$o=0;

		while ($row = mysqli_fetch_array($get)) {

				echo "<tr>";
				//echo "<td>".$row['id']."</td>";
				echo "<td>".$row['bazar']."</td>";
				echo "<td>".$row['price']."</td>";
							
				echo "</tr>";
				//break;

				 $a+=$row['price'];
				
		}

	echo "<tr>
		<th>Total</th>
		<td>$a</td>
		</tr>";
		echo "<hr>;"


	?>

		</table>

		</div>

	<!---------------------------------------------------------------------------------->

		<div id="tanvir" class="tanvir">

		<h2>Tanvir's Bazar</h2>

	<table border="1" cellspacing="0" cellpadding="5">
		
		<tr>
			<th>Bazar</th>
			<th>Price</th>
			
		</tr>
	

	<?php


	include("dbconfig.php");

	$get = mysqli_query($con, "SELECT * FROM tanvir");

			$a=0;
			$m=0;
			$t=0;
			$o=0;

		while ($row = mysqli_fetch_array($get)) {

				echo "<tr>";
				//echo "<td>".$row['id']."</td>";
				echo "<td>".$row['bazar']."</td>";
				echo "<td>".$row['price']."</td>";
							
				echo "</tr>";
				//break;

				 $a+=$row['price'];
				
		}

	echo "<tr>
		<th>Total</th>
		<td>$a</td>
		
		</tr>";
		echo "<hr>;"


	?>

		</table>

		</div>

<!---------------------------------------------------------------------------------->

		<div id="antor" class="antor">

<h2>Antor's Bazar</h2>

	<table border="1" cellspacing="0" cellpadding="5">
		
		<tr>
			<th>Bazar</th>
			<th>Price</th>
			
		</tr>
	

	<?php


	include("dbconfig.php");

	$get = mysqli_query($con, "SELECT * FROM antor");

			$a=0;
			$m=0;
			$t=0;
			$o=0;

		while ($row = mysqli_fetch_array($get)) {

				echo "<tr>";
				//echo "<td>".$row['id']."</td>";
				echo "<td>".$row['bazar']."</td>";
				echo "<td>".$row['price']."</td>";
							
				echo "</tr>";
				//break;

				 $a+=$row['price'];
				
		}

	echo "<tr>
		<th>Total</th>
		<td>$a</td>
		
		</tr>";
		echo "<hr>;"


	?>

		</table>

		</div>

</div>


</body>
</html>