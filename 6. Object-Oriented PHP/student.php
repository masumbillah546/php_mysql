<?php

class Student{

	private $name;
	private $roll;
	private $phone;

	function setName($name){
		$this->name=$name;
	}
	function setRoll($roll){
		$this->roll=$roll;
	}

	function setPhone($phone){
		$this->phone=$phone;
	}

	function getInfo(){
		echo "Hello,my name is ".$this->name."<br>my roll is ".$this->roll."<br>my phone number is ".$this->phone;
	}

}


$st_object1= new student();
$st_object1->setName("Masum Billah");
$st_object1->getInfo();




?>