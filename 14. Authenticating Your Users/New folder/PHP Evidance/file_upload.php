<?php

class File{

		public $name;
		public $type;
		public $size;

		public function myfile($file){

			$name=$file['name'];
			$this->name=$name;

			$type=['image/jpg', 'image/png', 'image/jpeg', 'application/pdf'];
			$this->type=$type;

			$size=4000000;
			$this->size=$size;

			if(!in_array($file['type'], $this->type)){
				echo "This file type is invalid";
			}
			elseif ($file['size']>$this->size) {
				echo "This file size is too big";
			}
			else{
				move_uploaded_file($file['tmp_name'], 'uploads/'.$this->name);
				echo "This file uploaded successfully";
			}
			

		}

}

$file1= new File();



?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>file upload</title>
</head>
<body>

	<form action="" method="post" enctype="multipart/form-data">
		<input type="file" name="myfile">
		<input type="submit" name="submit" value="upload">
	</form>

<?php

	if(isset($_POST['submit'])){


		if($_FILES['myfile']['error']==0){
		
			$file1->myfile($_FILES['myfile']);
		}
		else{
		echo "please select a file";
	}


	}





?>
	
</body>
</html>