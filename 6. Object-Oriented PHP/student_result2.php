
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<table border="2">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>MCQ</th>
			<th>Descriptive</th>
			<th>Evidence</th>
			<th>Gread</th>
		</tr>

	<?php

$students=[array("ID"=>1,"Name"=>"Masum","MCQ"=>35,"Descriptive"=>35, "Evidence"=>20),
		   array("ID"=>2,"Name"=>"Monir","MCQ"=>40,"Descriptive"=>40, "Evidence"=>35)];

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

?>
	
		<tr>
			<td><?php echo $id ?></td>
			<td><?php echo $n ?></td>
			<td><?php echo $m ?></td>
			<td><?php echo $d ?></td>
			<td><?php echo $e ?></td>
			<td><?php echo $result ?></td>
		</tr>

<?php } ?>

	</table>


	
</body>
</html>
