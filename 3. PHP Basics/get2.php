<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<a href="get2.php?country=Bangladesh">Bangladesh</a>
	<a href="get2.php?country=India">India</a>
	<a href="get2.php?country=Australia">Australia</a>


	<?php

	if($_GET['country']=='Bangladesh'){
		echo "Welcome to Bangladesh";
	}


	?>
	
</body>
</html>