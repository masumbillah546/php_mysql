<?php
$students = [
	["name" => "Student1", "MCQ" =>30 , "Des" => 60, "Evi" => 50 ],
	["name" => "Student2","MCQ" =>40 , "Des" => 70, "Evi" => 40],
	["name" => "Student2","MCQ" =>40 , "Des" => 70, "Evi" => 40]
];

?>
<table align="center" rules="all" border="1">
	<tr>
		<th>Name</th>
		<th>Mcq</th>
		<th>Des</th>
		<th>Evi</th>
		<th>Result</th>
	</tr>
<?php
foreach ($students as $student) {
	$name = $student['name'];
	$mcq = $student['MCQ'];
	$des = $student['Des'];
	$evi = $student['Evi'];
	$total =$mcq +$des;
	if ($total >= 70 && $evi >= 30) {
		$result = "Pass";
	}else{
		$result = "fail";
	}
	?><tr>
		<td><?php echo $name  ?></td>
		<td><?php echo $mcq  ?></td>
		<td><?php echo $des ?></td>
		<td><?php echo $evi  ?></td>
		<td><?php echo $result  ?></td>
		
	</tr>


	<?php

}

?>
</table>