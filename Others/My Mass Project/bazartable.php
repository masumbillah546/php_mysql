<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<title>Bazar table</title>

	<style>
		td{
			text-align: center;
			height: 30px;
			width: auto;
		}
		td:first-child{
			/*background-color: #E5D1D1;*/
			/*font-weight: bolder;
			font-size: 120%;*/
		}
		th{
			text-align: center;
			height: 30px;
			width: auto;
			background-color: #E3D2D2;
		}
		
		tr:last-child td{
			background-color: lightblue;
			font-weight: bolder;
		}

		div{
			position: relative;
			float: left;
			width: 25%;
		}


	</style>

</head>
<body>
	<h1>Bazar table</h1><hr>

	<div>

	<h2>Apple Bazar</h2>


	<table border="2">
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


	?>
	
	</table>

	</div>

	<div>

	<h2>Masum Bazar</h2>

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


	?>

		</table>

		</div>

		<div>

		<h2>Tanvir Bazar</h2>

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


	?>

		</table>

		</div>
		<div>

<h2>Antor Bazar</h2>

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


	?>

		</table>

		</div>




</body>
</html>