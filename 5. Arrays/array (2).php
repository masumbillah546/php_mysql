<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Array</title>
</head>
<body>


	<?php

			$days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday"];

			$fruits = array("Apple", "Mango", "Orange");

		echo $days[0]."<br>";
		echo $days[2]."<br>";
		echo $days[1]."<br>";
		echo $fruits[2]."<br>";


			echo "<hr>";
			echo "<h4>For loop</h4>";
			

		for($i=0; $i<count($fruits); $i++){
			echo $fruits[$i]."<br>";
		}

	?>
	
</body>
</html>