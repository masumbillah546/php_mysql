<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Members table</title>

	<!--<style>
		td{
			text-align: center;
			height: 30px;
			width: 60px;
		}
		td:first-child{
			background-color: #E5D1D1;
			font-weight: bolder;
			font-size: 120%;
		}
		th{
			text-align: center;
			height: 30px;
			width: 60px;
		}
		tr:last-child th{
			background-color: lightblue;
		}
		tr:last-child td{
			background-color: lightblue;
			font-weight: bolder;
		}


	</style>-->

</head>
<body>

	<h2>Daily Mill</h2><hr>


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

	$get = mysqli_query($con, "SELECT * FROM atm");

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

	echo "<tr>
		<th>Total</th>
		<td>$a</td>
		<td>$m</td>
		<td>$t</td>
		<td>$o</td>
		<td></td>
		</tr>";


	?>
	
	</table>


		<?php

	include("bazarcount.php");

	?>


	<table border="1" cellspacing="0" cellpadding="5">
		<br>
		<br>
		<h2>Total Bazar</h2><hr>
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
		<br>
		<br>

	<h2>Final Result</h2><hr>


	
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

<br>
<br>



</body>
</html>