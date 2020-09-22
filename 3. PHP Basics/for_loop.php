
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		span{
			font-size: 150px;
		}
	</style>
</head>
<body>



<?php

function pyramid($hm){

for($i=1; $i<=$hm; $i++){

	echo "<h1>Header $i</h1>";

for($j=1; $j<=$i; $j++){

echo '<span>*'.$j.'</span>';

}

echo '<br/>';


}}

pyramid(5);


?>



	
</body>
</html>
