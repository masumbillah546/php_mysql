<?php
	if (isset($_POST['lastname'])) {
		$db = new mysqli("localhost", "root", "", "classicmodels");
		$stmt = $db->prepare("SELECT firstName, lastName, email, employeeNumber FROM employees WHERE lastName like ?");

		$ln=$_POST['lastname'];
		//$ln="%$ln%";

		$stmt->bind_param('s', $ln);
		$stmt->execute();
		$stmt->store_result();
		echo "<pre>";
		print_r($stmt);
		print_r($object);
		echo "</pre>";
		echo "<br>";
		
		if ($stmt->num_rows != 0) {
		//if ($stmt->num_rows > 0) {
			$stmt->bind_result($fName, $lName, $eMail, $n);

			while ($stmt->fetch()){

				printf("%s %s (%s) %s<br/>", $fName, $lName, $eMail, $n);

			}
			
		} else {
			echo "No results found.";
		}
	}
?>

<p>
	Search the employee database:<br />
	<form action="search2.php" method="post">
		Last name:<br>
		<input type="text" name="lastname" size="20" maxlength="40" value=""><br>
		<input type="submit" value="Search!">
	</form>
</p>