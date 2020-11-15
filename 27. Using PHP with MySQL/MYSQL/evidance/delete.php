
<?php


$db = new mysqli('localhost','root','','mycompany');



if(isset($_POST['submit'])){

		
		$id=$_POST['id'];
		


 		$result = $db->query("DELETE FROM manufacturer WHERE id='$id'");

 		if($result){

 			echo "Deleted Succsessfully";

		}else{
			
			echo "Cannot delete";

			}
	
}



?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Delete by id</title>
</head>
<body>

	<form action="" method="post">

		<select name="id" id="">

			<option value="">Select one</option>

			<option value="1">Google</option>
			<option value="2">Apple</option>
			
		</select>
		<input type="submit" name="submit" value="Delete">
	</form>
	
</body>
</html>