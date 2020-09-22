<?php


try{

	$str="masum";

	if( $str){
		throw new Exception('Somthing bad just happend');
	
	}

} catch(Exception $e){
	echo $e->getMessage();
}





?>