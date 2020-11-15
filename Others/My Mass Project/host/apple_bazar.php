<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<title>Apple's Bazar</title>
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



	

	<div id="apple" class="apple">

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

	<br><br><br>


</div>


</body>
</html>