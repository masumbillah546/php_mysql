






<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hms";

// Create connection
@$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//$file = fopen($filename, 'r')  or die("unable to open file ($filename)");

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>die</title>
</head>
<body>
	<h1>Hello World</h1>
</body>
</html>