<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Odd and Even</title>
</head>
<body>
	<h3>Even and Odd Number Checking</h3>

	<form action="" method="post">
	
	Starting number: <input type="number" name="number"><br>
	Ending number: <input type="number" name="number2">
	<input type="submit" value="Submit" name="submit">

</form>


<?php

	if(isset($_POST['submit'])){
		$n=$_POST['number'];
		$n2=$_POST['number2'];
		check1($n,$n2);
		check2($n,$n2);
	}

	function check1($x,$y){

		echo "<br><b>All Even numbers are: </b>";

		for($x; $x<=$y; $x++){


			if($x%2==0){
				echo $x.", ";
			}

		}

	}

	function check2($x,$y){

			echo "<br><b>All Odd numbers are: </b>";

		for($x; $x<=$y; $x++){


			if($x%2!=0){
				echo $x.", ";
			}

		}

	}


	?>


</body>
</html>