<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<title>Result</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</head>

<body >

	
	<div class="body">
				<div class="mynav">
					<div class="box"><a href="index.php">Meal Entry</a></div>
					<div class="box"><a href="bazar.php">Bazar Entry</a></div>
					<div class="box"><a href="bazar.php#apple">Apple's Bazar</a></div>
					<div class="box"><a href="bazar.php#masum">Masum's Bazar</a></div>
					<div class="box"><a href="bazar.php#tanvir">Tanvir's Bazar</a></div>
					<div class="box"><a href="bazar.php#antor">Antor's Bazar</a></div>
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

	<div class="result">

	

	<?php



	include("dbconfig.php");

	$get = mysqli_query($con, "SELECT * FROM meal");

			$a=0;
			$m=0;
			$t=0;
			$o=0;

		while ($row = mysqli_fetch_array($get)) {


				$a+=$row['apple'];
				$m+=$row['masum'];
				$t+=$row['tanvir'];
				$o+=$row['antor'];
				$to=$a+$m+$t+$o;
		}

	


	include("bazar_count.php");

	?>



	<h1>Final Result</h1><hr>


	
	<table border="1" cellspacing="0" cellpadding="5">
		
		<tr>
			<th>নং</th>
			<th>নাম</th>
			<th>মিল</th>
			<th>মিল খরচ</th>
			<th>জমা/বাজার</th>
			<th>দেনা/পাওনা</th>
			
		</tr>
			<tr>
			<td>1</td>
			<td>APPLE</td>
			<td><?php echo $a?></td> <!--mill-->
			<td><?php echo sprintf( "%.1f",$a*$tb/$to)?></td>
			<td><?php echo $app?></td>
			<td><?php echo sprintf( "%.1f",$app - $a*$tb/$to)?></td>
			
			
		</tr>
			<tr>
			<td>2</td>
			<td>MASUM</td>
			<td><?php echo $m?></td> <!--mill-->
			<td><?php echo sprintf( "%.1f",$m*$tb/$to)?></td>
			<td><?php echo $mas?></td>
			<td><?php echo sprintf( "%.1f",$mas - $m*$tb/$to)?></td>
			
			
		</tr>
			<tr>
			<td>3</td>
			<td>TANVIR</td>
			<td><?php echo $t?></td> <!--mill-->
			<td><?php echo sprintf( "%.1f",$t*$tb/$to)?></td>
			<td><?php echo $tan?></td>
			<td><?php echo sprintf( "%.1f",$tan - $t*$tb/$to )?></td>
			
			
		</tr>
			<tr>
			<td>4</td>
			<td>ANTOR</td>
			<td><?php echo $o?></td> <!--mill-->
			<td><?php echo sprintf( "%.1f",$o*$tb/$to)?></td>
			<td><?php echo $ont?></td>
			<td><?php echo sprintf( "%.1f",$ont - $o*$tb/$to)?></td>
			
			
		</tr>

		</table>

		<hr>


	<table border="1" cellspacing="0" cellpadding="5">

		<tr>
			<th>Total Bazar</th>
			<td><?php echo $tb?></td>
		</tr>
		<tr>
			<th>Total Mill</th>
			<td><?php echo $to?></td>
		</tr>
		<tr>
			<th>Mill Rate</th>
			<td><?php echo sprintf( "%.1f",$tb/$to)." tk"?></td>
		</tr>
	</table>
	</div>

	<br><br><br>


</div>

</body>
</html>