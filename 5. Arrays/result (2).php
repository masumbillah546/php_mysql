<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Result</title>
</head>
<body>

	<table border="2" cellspacing="0" cellpadding="5">
		<tr>
			<th>Name</th>
			<th>Score</th>
			<th>Result</th>
			<th>Meximum</th>
		</tr>



		<?php


		$students=array("Masum"=>80,"Monir"=>60, "Mamun"=>75,"josim"=>60,"Amena"=>85);

		foreach($students as $name=>$score){


			echo "<tr>
					<td>$name</td>
					<td>$score</td>
				</tr>";


		}

	 echo $maxscore=max($students);
	echo array_search($maxscore, $students);


		?>




	</table>
	
</body>
</html>