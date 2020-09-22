<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>


	<table border="3" padding="0" >
	<tr>
		<th>Name</th>
		<th>Score</th>
	</tr>	

	<?php 

	$players=array("sakib"=>80,"tamim"=>50,"rahim"=>60,"mustafiz"=>70);
			foreach ($players as $player=>$score) {
				echo "<tr><td>".$player."</td><td>".$score."</td></tr>";
			}
	?>	
			
		
	</table>
	
</body>
</html>