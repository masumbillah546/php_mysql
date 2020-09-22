<?php

	//include "Employee.php";

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		

		  $id= $_POST['id'];
		  $name=$_POST['name'];
		  $designation= $_POST['desig'];
		  $basic= $_POST['basic'];
		  $houserent= $_POST['hrent'];
		  $transport= $_POST['transport'];
		  $totalsalary= $basic + $houserent + $transport;

		  // if (isset($id) && isset($name) && isset($designation) && isset($basic) && isset($houserent) && isset($transport)) {

		  // 	echo "ID: " .$id ." NAME: " .$name ." Designation: " .$designation ." Basic: " .$basic ." houserent: " .$houserent ." transport: " .$transport;
		  	
		  // }else{
		  // 	echo "Invalid or empty input";
		  // }
	}



	class Employee
{
   // public $id;
  protected $name;
   // public $designation;
   // public $basic;
   // public $transport;
   // public $houserent;
   // public $total;

   public function __construct($id, $name, $designation, $basic, $transport, $houserent)
   {
   	$this->id= $id;
   	$this->name= $name;
   	$this->designation= $designation;
   	$this->basic= $basic;
   	$this->transport= $transport;
   	$this->houserent= $houserent;


   }
   public function display(){
   	 echo "ID: " . $this->id . "<br>";
   	 echo "Name: " . $this->name . "<br>";
   	 echo "Designation: " . $this->designation . "<br>";
   	 echo "Basic: " . $this->basic . "<br>";
   	 echo "Transport: " . $this->transport . "<br>";
   	 echo "Houserent: " . $this->houserent . "<br>";


   }


}


$employee1 = new Employee($id, $name, $designation, $basic, $transport, $houserent);
$employee1 -> display();



?>