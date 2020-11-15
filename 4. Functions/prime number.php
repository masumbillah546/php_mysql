<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Prime Number</title>
</head>
<body>
	<h2>Prime Number</h2>


	<form action="" method="post">
		Starting number: <input type="number" name="number1"><br>
		Ending number: <input type="number" name="number2">
		<input type="submit" name="submit" value="Check">
	</form>

	<?php

	if(isset($_POST["submit"])){

		$n=$_POST["number1"];
		$n2=$_POST["number2"];


		echo prime($n,$n2);

	}


	function prime($x,$y){

		for($x; $x<=$y; $x++){

			if($x%2!=0){
				echo $x."<br>";
				
			}


		}

	}



	?>

	
</body>
</html>