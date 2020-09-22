<?php


class Employee
 {    public $name;
      public $city;   
      protected $wage; 
 
    function __get($name){ 

      echo "__get called!<br />";
      $vars = array("name","city");

      if (in_array($name, $vars)){ 

            return $this->$name;

         } else {

   return "No such variable!";
    } 

     } 
 
} 
 
$employee = new Employee(); 
$employee->name = "Mario"; 

echo $employee->name."<br />";
echo $employee->age;
//echo $employee->city;



?>