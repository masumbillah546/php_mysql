<?php


if(isset($_POST['submit'])){


	$name=$_POST['name'];
	$address=$_POST['address'];
	$district=$_POST['district'];
	$gender=$_POST['gender'];


	// echo "Name: ".$name."<br>";
	// echo "Address: ".$address."<br>";
	// echo "Gender: ".$gender."<br>";
	// echo "District: ".$district."<br>";
?>
	<table border="1"  cellpadding="8">
		<tr>
			<th>Name</th>
			<th>Address</th>
			<th>Gender</th>
			<th>District</th>
		</tr>
		<tr>
			<td><?php echo $name;?></td>
			<td><?php echo $address;?></td>
			<td><?php echo $gender;?></td>
			<td><?php echo $district;?></td>
		</tr>
	</table>

<?php
}
?>