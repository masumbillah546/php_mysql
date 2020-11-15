<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Students List</title>
</head>
<body>


	<table border="2">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Phone</th>
			<th>Delete</th>
		</tr>
	

	<?php


	include("dbconfig.php");

	$get = mysqli_query($con, "SELECT * FROM students_table");


		while ($row = mysqli_fetch_array($get)) {

				echo "<tr>";
				echo "<td>".$row['id']."</td>";
				echo "<td>".$row['name']."</td>";
				echo "<td>".$row['email']."</td>";
				echo "<td>".$row['phone']."</td>";				
				echo "<td><a href=\"delete.php?id=".$row['id']."\">Delete</a></td>";				
				echo "</tr>";
				//break;
		}

	// $row = mysqli_fetch_array($get);

	// while ($row) {
	// 	echo "ID: ".$row['id'];
	// 	echo " Name: ".$row['name'];
	// 	echo " Email: ".$row['email'];
	// 	echo " Phone: ".$row['phone']."<br>";
	// 	break;
	// }
	//echo $row['name'];


	?>
	
	</table>

	<br>
	<br>

	<a href="mydatabase.php">Entry Form</a>

</body>
</html>