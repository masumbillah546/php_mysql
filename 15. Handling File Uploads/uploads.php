<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>


	<form action="" enctype="multipart/form-data"
method="post">
 <label form="name">Name:</label><br>
 <input type="text" name="name" value=""><br>
 <label form="email">Email:</label><br>
 <input type="text" name="email" value=""><br>
 <label form="homework">Class notes:</label>
 <input type="file" name="homework" value=""><br>
 <input type="submit" name="submit" value="Submit Homework">
</form><br><br>

	<?php

	if(isset($_POST["submit"])){

		// echo "<pre>";
		// print_r($_FILES);

		$name=$_FILES["homework"]["name"];

		$extention=pathinfo($name, PATHINFO_EXTENSION);
		$extention=strtolower($extention);
		$allowedtype=["jpg","png","jpeg"];


		$size=$_FILES["homework"]["size"];

		if($size>819200){

			$msg[]="File size is not allowed more then 200kb";

			$ok=false;
		}elseif(!in_array($extention, $allowedtype)){

			$ok=false;
			$msg[]="File must be jpg, png or jpeg";

		}else{
			$ok=true;
		}

	


		if($ok && is_uploaded_file($_FILES["homework"]["tmp_name"])){


		move_uploaded_file($_FILES["homework"]["tmp_name"], "uploads/".$_FILES["homework"]["name"]);

		echo "File uploadesd successfully"."<br>";
			$img = "uploads/".$_FILES["homework"]["name"];
			echo "<img src='$img' height='200'>";

		}else{
			echo "Sorry, File can't be uploaded"."<br>";
		}



		foreach ($msg as $error) {
			echo $error;
		}



	
	}


	?>


	
	
</body>
</html>