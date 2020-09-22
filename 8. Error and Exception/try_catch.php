<?php






// try {   
// 	$fh=fopen("contacts1.txt", "r");
// 	if(!$fh){
// 		throw new Exception("Could not open the file!");
// }
// 	} catch(Exception $e){
// 		echo $e->getMessage();
// 	}


try {
 $fh = fopen("contacts.txt", "r");
 if (! $fh) {
 throw new Exception("Could not open the file!");
 }
} catch (Exception $e) {
 echo "Error (File: ".$e->getFile().", line ".
 $e->getLine()."): ".$e->getMessage();
}









?>