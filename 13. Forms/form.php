<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form</title>
</head>
<body>
	<h2>Data sending to server Using Form</h2>
	<form action="" method="post">
		First Name: <input type="text" name="fname"><br>
		Last Name: <input type="text" name="lname"><br>
		Gender: <input type="radio" name="gender" value="Male">Male
		<input type="radio" name="gender" value="Female">Female <br>
		Address: <textarea name="add" id="" cols="30" rows="10"></textarea>	<br>
		District: <select name="dis" id="">
			<option value="">Select One</option>
			<option value="Dhaka">Dhaka</option>
			<option value="Comilla">Comilla</option>
			<option value="Khulna">khulna</option>
		</select><br>
		<input type="submit" name="submit" value="Submit">


	</form>


	<?php

	//$x=false;
	if(isset($_REQUEST['submit'])){
		
	 // echo "<b>First Name: </b>".$_REQUEST['fname']."<br>".
	 //  "<b>Last Name: </b>".$_REQUEST['lname']."<br>".
	 // "<b>Gender: </b>".$_REQUEST['gender']."<br>".
	 //  "<b>Address: </b>".$_REQUEST['add']."<br>".
	 //  "<b>District: </b>".$_REQUEST['dis']." ";

	extract($_REQUEST);
	echo $fname;

	}



	//  echo "<pre>";

	 

	



	?>

</body>
</html>