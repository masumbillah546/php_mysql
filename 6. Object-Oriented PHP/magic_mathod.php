<?php



 
class Employee {
 public $name;
 public $title;

 public function _set($propName, $propValue){
 	echo "Nonexistent variable: \$$propName!";
 }

  }
 
$employee = new Employee(); 

 $employee->name = "Mario";
 $employee->title = "Executive Chef"; 
 $employee->address = "Mirpur"; 


 echo "Name: ".$employee->name; 
 echo "<br>";
 echo "Title: ".$employee->title; 
 echo "<br>";
 echo "address: ".$employee->address; 








?>



