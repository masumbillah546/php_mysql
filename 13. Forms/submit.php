<?php

$name=$_POST['name'];
$email=$_POST['email'];
$add=$_POST['add'];
$submit=$_POST['submit'];

if($name=null ||$email=null ||$add=null){

	echo "Name, Email and Address must be added";

}else{
	if(isset($submit)){

		if(preg_match('/^[A-z1-0]+@[A-z].[A-z1-0]/', $email)){
			echo 'ok';
		}
	}
}


?>