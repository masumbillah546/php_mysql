<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<title>Meal Entry</title>
	  <link rel="stylesheet" href="css/bootstrap.min.css">
	  <link rel="stylesheet" href="css/style.css">
	  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	  <script src="js/script.js"></script>
	  <script src="js/jquery.min.js"></script>
	  <script src="js/bootstrap.min.js"></script>
	  


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


		




	<form class="meal" action="" method="post">

		<h2>Meal Entry</h2>

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
			<td><input type="number" step="0.01" name="apple"></td>
			<td><input type="number" step="0.01" name="masum"></td>
			<td><input type="number" step="0.01" name="tanvir"></td>
			<td><input type="number" step="0.01" name="antor"></td>
		</tr>

		</table>
		<input class=" btn-success btnC" type="submit" name="submit" value="Submit">
		<?php

			include("dbconfig.php");


	 if(isset($_POST['submit'])){

	$id=$_POST['date'];
	$apple=$_POST['apple'];
	$masum=$_POST['masum'];
	$tanvir=$_POST['tanvir'];
	$antor=$_POST['antor'];

	if($id!=null){
	
	


$sql = "INSERT INTO `meal` (`id`, `apple`, `masum`, `tanvir`, `antor`) VALUES ('$id', '$apple', '$masum', '$tanvir', '$antor')";


if(!mysqli_query($con, $sql)){
	    echo "<h4><b>This Data alrady inserted</b></h4>";
	}else{
	    echo "<h4><b>Data inserted successfully!!</b></h4>";
	}
	

	

}

 }

		
	?>


	</form>

<hr>

<!------------------------------------------------------------------------------->

	<form class="meal2" action="">
		
		<h2>Daily Meal</h2>
	

	<table border="1" cellspacing="0" cellpadding="5">

		

		<tr>
			<th>Date</th>
			<th>Apple</th>
			<th>Masum</th>
			<th>Tanvir</th>
			<th>Antor</th>
			<th>Action</th>
		</tr>
	

	<?php


	include("dbconfig.php");

	$get = mysqli_query($con, "SELECT * FROM meal");


			


			$a=0;
			$m=0;
			$t=0;
			$o=0;


		while ($row = mysqli_fetch_array($get)) {

				echo "<tr>";
				echo "<td>".$row['id']."</td>";
				echo "<td>".$row['apple']."</td>";
				echo "<td>".$row['masum']."</td>";
				echo "<td>".$row['tanvir']."</td>";				
				echo "<td>".$row['antor']."</td>";				
				echo "<td><a href=\"delete.php?id=".$row['id']."\" onclick=\"return confirm('Are You sure to delete?')\">Delete</a></td>";				
				echo "</tr>";
				//break;

				$a+=$row['apple'];
				$m+=$row['masum'];
				$t+=$row['tanvir'];
				$o+=$row['antor'];
				$to=$a+$m+$t+$o;
		}

		$a2=$a;
		$m2=$m;
		$t2=$t;
		$o2=$o;
		$to2=$to;

	echo "<tr>
		<th>Total</th>
		<td>$a2</td>
		<td>$m2</td>
		<td>$t2</td>
		<td>$o2</td>
		<td>$to2</td>
		</tr>";


	?>
	
	</table>
</form>

	<hr>			
	</div>

					
				
			   
</body>
</html>