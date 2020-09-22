<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP variable</title>
</head>
<body>
	

		<?php

				$name = "Abdur Rahim";
				$address = "Dhanmondi";
				$age = 20;
				$phone = "0175456565";




		 ?>


<table border="1">
	<tr>
		<th>Name</th>
		<th>Address</th>
		<th>Age</th>
		<th>Phone</th>
	</tr>
	<tr>
		<td><?php echo $name; ?></td>
		<td><?php echo $address; ?></td>
		<td><?php echo $age; ?></td>
		<td><?php print $phone; ?></td>
	</tr>
</table>



</body>
</html>