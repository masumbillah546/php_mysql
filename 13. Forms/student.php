<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Information</title>
</head>
<body>

	<form action="result.php" method="post">
		
		Name:<br><input type="text" name="name"><br>
		Address:<br><textarea name="address" id="" cols="30" rows="10"></textarea><br>
		Gender: <input type="radio" name="gender" value="Male">Male
					<input type="radio" name="gender" value="Female">Female<br>
		District: <select name="district" id="">
						<option value="">Select one</option>
						<option value="Comilla">Comilla</option>
						<option value="Dhaka">Dhaka</option>
						<option value="Feni">Feni</option>
					</select><br>
				<input type="submit" name="submit" value="Submit">

	</form>
	
</body>
</html>