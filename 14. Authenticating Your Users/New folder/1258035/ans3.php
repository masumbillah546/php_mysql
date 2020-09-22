<!DOCTYPE html>
<html>
<head>
	<title>File Upload</title>
</head>
<body>

	<h2>File Upload</h2>

	<form action="" method="post" enctype="multipart/form-data">

		<input type="file" name="file">
		<input type="submit" name="submit" value="upload">
		
	</form>

	<?php

	$array=['image/jpg', 'image/png', 'image/jpeg', 'application/pdf'];

	if(isset($_POST['submit'])){


		if($_FILES['file']['error']==0){

			if($_FILES['file']['size']>400000){
				echo "file size must be less then 400 KB";
			}
			elseif(!in_array($_FILES['file']['type'], $array)){
				echo "file type not valid";
			}
			else{
				move_uploaded_file($_FILES['file']['tmp_name'],"uploads/".$_FILES['file']['name']);
				echo "File uploaded successfully";
			}
			
		}
		else{
			echo "please select a file";
		}


	}


	?>

</body>
</html>