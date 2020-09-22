<?php include ("File.php");

$file=new File();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>File Uploads</title>
</head>
<body>

	<?php
		if($_SERVER['REQUEST_METHOD']=='POST'){
			if($_FILES['myfile']['error']==0){
				$file->uploadfile($_FILES['myfile']);
				
			}
			else{
				echo "File not uploaded";
			}
		}

	?>


	<form action="upload_file_oop.php" method="post" enctype="multipart/form-data">
		<input type="file" name="myfile" id="">
		<input type="submit" name="submit" id="" value="upload">
	</form>
	
</body>
</html>