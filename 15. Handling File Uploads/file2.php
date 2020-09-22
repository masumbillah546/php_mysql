<?php

class File
		{

			public function fileUpload($file){
				
				if($file['size']>800000){
					echo "file size is too Big";
				}
				// elseif($file['error']==0){
				// 	echo "File not uploaded";
				// 	fclose($file);				
				// }
				else{
				move_uploaded_file($file['tmp_name'], "uploads/".$file['name']);
					echo "File uploaded";
					fclose($file);


				}
				
					
				

			}




		}


?>