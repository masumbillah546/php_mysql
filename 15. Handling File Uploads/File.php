<?php

class File
		{
			private $supportFormates=['image/png','image/jpg','image/jpeg'];
			public function uploadfile($file){
				if (in_array($file['type'], $this->supportFormates)){
					move_uploaded_file($file['tmp_name'], 'uploads/'.$file['name']);
					echo "File has been uplaoded";
				}
				else{
					echo 'File formate is not supported';
				}
			}
		}

?>


