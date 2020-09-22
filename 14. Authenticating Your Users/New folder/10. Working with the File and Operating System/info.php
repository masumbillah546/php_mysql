

<?php

$string=['Masum'=>'masum@gmail.com','Monir'=>'monir@gmail.com'];

$file=fopen('address.txt', 'r+');

foreach($string as $name=>$email){

	fwrite($file, $name." ".$email);

}
fclose($file);

echo "The file size is ". filesize('address.txt')." bytes";




?>