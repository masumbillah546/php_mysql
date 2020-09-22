<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>sprintf and printf</title>
</head>
<body>

	<?php

		$number=9;
		$num2=15;
		$string="Beijing";

		printf("There are %u-%u million bicycles in %s. <br>" ,$number, $num2,$string);


		$cost=sprintf("There are %.2f-%.2f million bicycles in %s. <br>" ,9.235, 15.254,$string);
		echo $cost;




	?>
	
</body>
</html>