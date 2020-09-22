<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Result</title>
</head>
<body>

		<table border="1" cellspacing="0" cellpadding="5">

			<tr>
				<th>SN</th>
				<th>Name</th>
				<th>MCQ</th>
				<th>Descriptive</th>
				<th>Evidence</th>
				<th>Grade</th>
			</tr>
			
	<?php

	$student=array();
	$student[]=array("Name"=>"Masum","MCQ"=>30,"Descriptive"=>37, "Evidence"=>30);
	$student[]=array("Name"=>"Mamun","MCQ"=>45,"Descriptive"=>40, "Evidence"=>40);
	$student[]=array("Name"=>"Monir","MCQ"=>15,"Descriptive"=>38, "Evidence"=>35);


		$id=0;

	foreach ($student as $student) {
		$id++;
		$n=$student["Name"];
		$m=$student["MCQ"];
		$d=$student["Descriptive"];
		$e=$student["Evidence"];
		
		$md=$m+$d;	

		if($md<60 || $e<30){

			$r="Failed";
		}else{
			$r="Passed";
	}
	echo "	<tr>
			<td>$id</td>
			<td>$n</td>
			<td>$m</td>
			<td>$d</td>
			<td>$e</td>
			<td>$r</td>
			</tr>";
}

	?>


</table>
</body>
</html>