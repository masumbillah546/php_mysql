
<?php

	$host= "localhost";
	$user="root";
	$pass="";
	$db="black_hawk";
	$con = New mysqli($host, $user, $pass, $db);


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bazar insert</title>
</head>
<body>
	<form action="" method="post">
	<select name="st_id" id="">
		<option value="">Select one</option>
		<?php
		$result= $con->query("SELECT * FROM students");
		$name=array();
		while($row=$result->fetch_assoc()){
			array_push($name, $row['name']);
			echo '<option value="'.$row['st_id'].'">'.$row['name'].'</option>';

		}
		

		?>
		
		
	</select>

	<input type="text" name="bazar" placeholder="enter bazar" required="">
	<input type="number" name="price" placeholder="enter price">
	<input type="submit" name="submit" value="Submit">
	</form><br>	<br>
	<?php

	extract($_POST);
	if(isset($submit)){


	$b=$con->query("INSERT INTO bazar(ditails,price,st_id) VALUES ('$bazar','$price','$st_id')");



	for($i=0; $i<count($name); $i++){

		if($i==$st_id-1){
			echo "<h2>Bazar List of ".$name[$i]."</h2>";
		
		}


	} 


	?>
	
	<p>ID: <?php echo $st_id;?></p>
	<table border="1" cellspacing="0">
		<tr>
			<th>Details</th>
			<th>Price</th>
			<th>Date</th>
		</tr>

	<?php

	$result2= $con->query("SELECT * FROM bazar WHERE st_id=$st_id");
		while($row=$result2->fetch_assoc()){
?>
		<tr>
			<td><?php echo $row['ditails'];?></td>
			<td><?php echo $row['price'];?></td>
			<td><?php echo $row['date'];?></td>
		</tr>
<?php
			
		}

}
	?>

	</table>
	
</body>
</html>