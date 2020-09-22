
<?php


class File{
	public function myfile($file){


		move_uploaded_file($file['tmp_name'], 'uploads/'.$file['name']);
		echo "The file uploaded successfully";

	}
}

$fobject = new File();


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>File Upload</title>
</head>
<body>

	<form action="" method="post" enctype="multipart/form-data">
		<input type="file" name="myfile">
		<input type="submit" name="submit" value="Upload file">
	</form>

	<?php

	if($_SERVER['REQUEST_METHOD']=='POST'){


		$fobject->myfile($_FILES['myfile']);



	}



	?>
	
</body>
</html>