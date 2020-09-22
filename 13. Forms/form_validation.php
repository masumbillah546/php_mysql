<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Security function</title>
</head>
<body>
	

	<?php


// echo "Before";
// echo trim(' Hello World ');
// echo "After<hr>";

echo "Before";
 $x=' Hello World ';
 echo trim($x);
 echo $x;


?>






	<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";





if ($_SERVER["REQUEST_METHOD"] == "POST") {


	//$error="";

	if($_POST['email']==""){

		$error="Email is requird";

	}else{
		$email = senitization($_POST["email"]);
	}



	if($_POST['website']==""){

		$error2="website is requird";

	}else{
		$website = senitization($_POST["website"]);
	}



	if($_POST['comment']==""){

		$error3="comment is requird";

	}else{
		$comment = senitization($_POST["comment"]);
	}

if($_POST['gender']==""){

		$error4="gender is requird";

	}else{
		$gender = senitization($_POST["gender"]);
	}





  //$name = senitization($_POST["name"]);
  //$email = senitization($_POST["email"]);
  //$website = senitization($_POST["website"]);
 // $comment = senitization($_POST["comment"]);
  //$gender = senitization($_POST["gender"]);
}

function senitization($data) {
  $data= trim($data);
  $data= stripslashes($data);
  $data= htmlspecialchars($data);
  return $data;
}
?>





<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email"><span><?php if(isset($error)) echo $error ?></span>
  <br><br>
  Website: <input type="text" name="website"><span><?php if(isset($error2)) echo $error2 ?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea><span><?php if(isset($error3)) echo $error3 ?></span>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other <span><?php if(isset($error4)) echo $error4 ?></span>
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

<?php
$new = htmlspecialchars("<a href='test'>Test</a>");
echo $new; // &lt;a href=&#039;test&#039;&gt;Test&lt;/a&gt;
?> 


</body>
</html>





