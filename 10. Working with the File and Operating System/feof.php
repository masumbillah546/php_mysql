
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Data Entry</title>
	<style>
		tr:nth-child(1) {
  		font-weight: bolder;
  		text-align: center;

		}
		tr:nth-child(1) td{
			padding: 5px;
		}
		td{
			text-align: center;
		}
	</style>
</head>
<body>
	


	<form action="" method="post">
		
		Write something: <br> <textarea name="write" id="" cols="25" rows="5"></textarea><br>
		<input type="submit" name="submit" value="Submit">


	</form>



<?php


	if(isset($_POST['submit'])){



	$fh = fopen('users.txt', 'r+');

	$string=$_POST['write'];

	fwrite($fh, $string);
 	

?>


<table border="2">
	

	<?php

	while(!feof($fh)){

 		$array=explode(' ', fgets($fh));
 		list($id, $name, $email)=$array;


	?>

	<tr>
		<td><?php echo $id; ?></td>
		<td><?php echo $name; ?></td>
		<td><?php echo $email; ?></td>
		
	</tr>

<?php	}  ?>

</table>



<?php
	}
?>

</body>
</html>