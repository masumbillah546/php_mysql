<?php



/**
 * 
 */
class Employee //extends AnotherClass
{
	
	//function __construct(argument)
	
		public $name;
		private $title;
		protected $wage;


		public function setName($uname){

			$this->name=$uname;

	}

		public function getName(){

		echo	$this->name;

	}


		public function hello(){
			echo "Hello My dear".$this->name;
		}

}//Employee class


		class Programmer extends Employee
				{

					public function setWage($amount){
						$this->wage=$amount;
					}

					public function getWage(){
						return $this->wage;
					}

					public function bonus($percent){

						echo $this->wage * $percent/100;

					} //bonus
				} //programmer child class


	/*	$emp1 = new Employee;
		$emp1->setName("Rahim");
		$emp1->getName();

		$emp3=new Employee;
		$emp3->setName("Karim");
		//$emp3->getName();
		$emp3->hello(); */

		$emp1 = new Programmer;
		$emp1->setWage(10000);
		echo $emp1->getWage()."<br>";
		$emp1->bonus(4);

		



?>