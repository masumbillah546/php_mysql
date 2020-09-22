<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Result</title>
</head>
<body>

		<form action="" method="post">
			<input type="number" name="id" placeholder="ID"><br>
			<input type="text" name="name" placeholder="Name"><br>
			<input type="number" name="mcq" placeholder="MCQ"><br>
			<input type="number" name="descriptive" placeholder="Descriptive"><br>
			<input type="number" name="evidence" placeholder="Evidence"><br>
			<input type="submit" value="Submit">
			<input type="reset" value="Reset"><br><br><br>
		</form>

		<table border="1" cellspacing="0" cellpadding="5">

			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>MCQ</th>
				<th>Descriptive</th>
				<th>Evidence</th>
				<th>Grade</th>
			</tr>
			
	<?php

		$id=$_POST['id'];
		$name=$_POST['name'];
		$mcq=$_POST['mcq'];
		$des=$_POST['descriptive'];
		$ev=$_POST['evidence'];



	$students=[array("ID"=>$id,"Name"=>$name,"MCQ"=>$mcq,"Descriptive"=>$des, "Evidence"=>$ev)];


	foreach ($students as $student) {

		$id=$student["ID"];
		$n=$student["Name"];
		$m=$student["MCQ"];
		$d=$student["Descriptive"];
		$e=$student["Evidence"];
		
		$md=$m+$d;	

		if($md<70 || $e<30){

			$result="Failed";
		}else{
			$result="Passed";
	}
	echo "	<tr>
			<td>$id</td>
			<td>$n</td>
			<td>$m</td>
			<td>$d</td>
			<td>$e</td>
			<td>$result</td>
			</tr>";
}

	?>


</table>
</body>
</html>