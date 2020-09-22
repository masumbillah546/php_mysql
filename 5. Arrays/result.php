<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Result</title>
</head>
<body>
	

	<form action="" method="post">
		<table border="1" cellspacing="0" cellpadding="5">

			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>MCQ</th>
				<th>Descriptive</th>
				<th>Evidence</th>
				<th>Grade</th>
			</tr>
			<tr>
				<td>1</td>
				<td>Student1</td>
			
		
		
		

	</form>

	<?php

	// $student1=["MCQ"=>10,"Descriptive"=>37, "Evidence"=>30];
	// $student2=["MCQ"=>15,"Descriptive"=>40, "Evidence"=>40];

	$student=array();
	$student[]=array("MCQ"=>30,"Descriptive"=>37, "Evidence"=>30);
	$student[]=array("MCQ"=>15,"Descriptive"=>40, "Evidence"=>40);


	foreach ($student[0] as $title => $value) {
		echo "<td>$value</td>";
	}
	
		// $ex1=$student[0][0]+$student[0][1];
		// $des1=$student[0][2];
		$ex=array_sum($student[0]);
		

		if($ex<60){

		echo "<td>Failed</td>";
	}else{
		echo "<td>passed</td>";
	}

	?>

</tr>
<tr>
	<td>2</td>
	<td>Student2</td>
	<?php


	foreach ($student[1] as $title => $value) {
		echo "<td>$value</td>";
	}

		$ex2=array_sum($student[1]);
		
		

		if($ex2<60){

		echo "<td>Failed</td>";
	}else{
		echo "<td>Passed</td>";
	}
	

	?>
</tr>

</table>


</body>
</html>