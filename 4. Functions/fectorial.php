<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Fectorial</title>
</head>
<body>

	<form action="" method="post">
		The number: <input type="number" name="number">
	<input type="submit" value="Submit" name="submit">

	</form>

	<?php

	if(isset($_POST['submit'])){
		$n=$_POST['number'];
		echo fectorial($n);
	}


	function fectorial($x){
		if($x==0){
			return 1;
		}else{

			return $x*fectorial($x-1);
		}
	}



	?>
	
</body>
</html>