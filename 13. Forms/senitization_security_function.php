<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Security function</title>
</head>
<body>
	

	<?php


echo "Before";
echo trim(' Hello World ');
echo "After<hr>";



?>


	<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = sanitization($_POST["name"]);
  $email = sanitization($_POST["email"]);
  $website = sanitization($_POST["website"]);
  $comment = sanitization($_POST["comment"]);
  $gender = sanitization($_POST["gender"]);
}

function sanitization($data) {
  $data = trim($data);
  $data = escapeshellarg($data);
  $data = strip_tags($data);
  $data = escapeshellcmd($data);//for file
  $data = htmlentities($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>





<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  Website: <input type="text" name="website">
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>


</body>
</html>





