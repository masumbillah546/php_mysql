<!DOCTYPE html>
<html>
<head>
	<title>Student Information</title>
</head>
<body>
	<h2>Student Information</h2>

</body>
</html>
<table border="2">

	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Batch</th>
		<th>Marks</th>
		<th>Result</th>
	</tr>
	


<?php


class Student{

	public $id;
	public $name;
	public $batch;
	public $result;

	public function __construct($id, $name, $batch, $result){

			$this->id=$id;
			$this->name=$name;
			$this->batch=$batch;
			$this->result=$result;

		echo "<tr><td>".$this->id."</td><td>".$this->name."</td><td>".$this->batch."</td><td>".$this->result."</td>";
		if($result<=60){
			echo "<td>Failed</td>";
		}
		else{
			echo "<td>Passed</td></tr>";
		}

	}


} 



$handle= fopen('students.txt', 'r');

	while(!feof($handle)){
		$get=fgets($handle);
		$array=explode(' ', $get);
	list($id ,$name, $batch, $result)=$array;
	
	$student = new Student($id, $name, $batch, $result);

	}

	


?>

</table>