<?php

class ReadFile
			{

			public $id;
			public $city;
			public $country;

			public function set_file($country){

				$handle=fopen($country, 'r');
				feof($handle);
				$values=explode(' ',fgets($handle));
				list($id,$city,$country)=$values;

				while($values){

					$this->id= $id;
					$this->city=$city;
					$this->country=$country;
				}

			}

			public function display(){

				echo $this->id.''.$this->city.' '.$this->country;




			}




			}


$obj=new ReadFile();
$obj->set_file('country.txt');
$obj->display();



?>