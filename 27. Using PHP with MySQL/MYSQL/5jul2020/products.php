


<?php

include('db_config.php');

$sql= "SELECT productCode, productName FROM products";
$result= $mysqli->query($sql, MYSQLI_USE_RESULT); //buffered

?>

<table border="2">
	<tr>
		<th>Code</th>
		<th>Name</th>
		<th>Action</th>
	</tr>

<?php 

while(list($code, $name)=$result->fetch_array()){
	?>

<tr>
	<td><?php echo $code ?>;</td>
	<td><?php echo $name ?>;</td>
	<td><a href="delete.php?id=<?php echo $code; ?>">Delete</a></td>
</tr>

<?php } ?>


</table>


