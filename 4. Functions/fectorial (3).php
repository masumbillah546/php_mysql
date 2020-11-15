<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Fectorial</title>
</head>
<body>
	<h2>Fectorial from specific number</h2>


	<form action="" method="post">
		The Number: <input type="number" name="number">
		<input type="submit" name="submit" value="Check">
	</form>



	<?php

	if(isset($_POST['submit'])){
		$n=$_POST["number"];
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