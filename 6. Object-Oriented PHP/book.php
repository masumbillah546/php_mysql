<?php

//error_reporting(E_ERROR | E_WARNING | E_PARSE);

class Book{
	public $ISBN;
	public $Name;
	public $authName;
	public $Price;
	public $percent;
	public function __construct($isbn,$name,$auth,$price){

		$this->ISBN=$isbn;
		$this->Name=$name;
		$this->authName=$auth;
		$this->Price=$price;


		echo "ISBN: ".$this->ISBN.'<br>';
		echo "Name: ".$this->Name.'<br>';
		echo "authName: ".$this->authName.'<br>';
		echo "Price: ".$this->Price."<br>";
	}
	public function Selling_price($discount){
		 $dis=$this->Price-$this->Price*($discount/100);
		echo "Selling Price: ".$dis;
	}
}
$book1=new Book(1313,"PHP","Jhone",220);
$book1->Selling_price(10);
?>
<br><hr><br>

<?php 

class Book2 {
	public $isbn;
	public $bname;
	public $aname;
	public $price;
	
	function __construct($isbn,$bname,$aname,$price){
		$this-> isbn = $isbn;
		$this-> bname = $bname;
		$this-> aname = $aname;
		$this-> price = $price;

		echo "ISBN :" .$this-> isbn . "<br>";
		echo "Book Name :" .$this-> bname . "<br>";
		echo "Author Name :" .$this-> aname . "<br>";
		echo "Accutal Price :" .$this-> price . "<br>";
	}
	public function Selling_price($discount){
		$res = $this -> price - $this -> price * ($discount / 100);
		echo "Selling Price : <b>" .$res . " (After ". $discount."% Discount) </b>";
	}
}

$b1 = new Book2(125, "Bangla", "Kazi Nazrul", 200);
$b1 -> Selling_price(30);

?>
