<?php
include("file2.php");
$file=new File();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>File Upload</title>
</head>
<body>

	<form action="" method="post" enctype="multipart/form-data">
		<input type="file" name="image" id=""><br>
		<input type="submit" name="submit" value="Upload">
	</form>

	<?php

	
		// echo '<pre>';
		// print_r($_FILES);
		if($_SERVER["REQUEST_METHOD"]=='POST'){
		$file->fileUpload($_FILES['image']);
		}
	?>
	
</body>
</html>