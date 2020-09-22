<?php
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

?>