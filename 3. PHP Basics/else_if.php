<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form</title>
</head>
<body>


	<form action="else_if.php" method="post">
		Guess <input type="text" name="guess"> 
		<input type="submit" value="Submit" name="submit">




<?php

	$s_number=78;

	if($_POST['guess']==$s_number){

	echo "<h2>Congratulations</h2>";

	}elseif(abs($_POST['guess']-$s_number) <10){
		echo "You're getting close";

	}else{
		echo "Sorry";
	}



	?>






	</form>

	
	
</body>
</html>