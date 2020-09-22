
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
	 What's your favorite programming language?<br> (check all that apply):<br>
		 <select name="languages[]" multiple="multiple">
			 <option value="csharp">C#</option>
			 <option value="javascript">JavaScript</option>
			 <option value="perl">Perl</option>
			 <option value="php" selected>PHP</option>
		</select><br>
		<input type="submit" name="submit" value="Submit">
	</form><br>

	<?php
	//print_r($_SERVER['REQUEST_METHOD']);
	if (isset($_POST["languages"])) {
		# code...
		$d=$_POST["languages"];
	print_r($d);

	}
	

	?>

</body>
</html>



