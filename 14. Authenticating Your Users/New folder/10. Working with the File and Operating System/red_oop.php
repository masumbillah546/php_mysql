<?php

class Read
		  {

		  	public $id=array();
		  	public $name=array();
		  	public $email=array();

	public function set(){

		$fh = fopen('users.txt', 'r+');	
		fwrite($fh, $write);

		

		while(!feof($fh)){

 		$array=explode(' ', fgets($fh));	
 		
 		list($id, $name, $email)=$array;
 		
 		$this->id[]=$id;
 		$this->name[]=$name;
 		$this->email[]=$email;

 	} 

	}

	function get(){

		print_r($this->id);

		//echo "<tr><td>".$array[$i]."</td><td>".$array."</td><td>".$array."</td></tr>";
	}



}

$read=new Read();
$read->get();


?>