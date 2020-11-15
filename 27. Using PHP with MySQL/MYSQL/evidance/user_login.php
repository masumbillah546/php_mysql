
<?php


$db = new mysqli('localhost','root','','mycompany');



if(isset($_POST['submit'])){

		//extract($_POST);

		$password=$_POST['password'];
		$username=$_POST['username'];


 $result = $db->query("SELECT * FROM users WHERE password='$password' AND username='$username'");

 		if($result->num_rows<1){

 		echo "Username or Password dosen't Match";

		}else{
			echo "Login Succsessfull";

			}


 

	
}



// while($row=mysqli_fetch_assoc($result)){

	// 	 $pass= $row['password'];
	// 	 $user= $row['username'];
		

	// 	if(!$pass){

	// 	echo "Username or Password is no Match";

	// 	}else{
	// 		echo "Login Succsessfull";

	// 		}

	// }
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>User login</title>
</head>
<body>

	<form action="" method="post">

		<input type="text" name="username" placeholder="Username">
		<input type="text" name="password" placeholder="Possword">
		<input type="submit" name="submit" value="login">
		
	</form>
	
</body>
</html>