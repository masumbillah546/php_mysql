<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Vowel checking</title>
</head>
<body>
	<h2>Vowel letter checking</h2>

	<form action="" method="post">
		The letter: <input type="text" name="vowel">
		<input type="submit" name="submit" value="Check">
	</form>


	<?php


	if(isset($_POST['submit'])){

		$vowel=strtolower($_POST['vowel']);

		echo "<br>". myfunction($vowel);

	}


	function myfunction($x){

		if($x=="a" || $x=="e" ||$x=="i" || $x=="o" || $x=="u"){

				return "\"<b>$x</b>\" is a vowel letter";
		}else{

				return "\"<b>$x</b>\" is not vowel letter";
		}

	}

	



	?>
	
</body>
</html>