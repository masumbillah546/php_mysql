<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php   // If the form has been submitted with a supplied last name   
	if (isset($_POST['lastname'])) 
		{// Connect to server and select database
			$db = new mysqli("localhost", "root", "", "classicmodels");
			// Query the employees table
			$stmt = $db->prepare("SELECT firstName, lastName, email FROM employees WHERE lastName like ?");
			$ln = $_POST['lastname'];
			echo "SELECT firstName, lastName, email FROM employees WHERE lastName like '$ln'";
			$stmt->bind_param('s', $_POST['lastname']);
			$stmt->execute();
			$stmt->store_result();
			// If records found, output them
			if ($stmt->num_rows > 0) 
				{$stmt->bind_result($first, $last, $em);
					while ($stmt->fetch()) 
						{ 
							//printf("%s, %s (%s)<br />", $last, $first, $em);
						}
				} 
					else 
				{echo "No results found.";}   
		}

		?>

	<p>Search the employee database:<br /><form action="search.php" method="post">Last name:<
