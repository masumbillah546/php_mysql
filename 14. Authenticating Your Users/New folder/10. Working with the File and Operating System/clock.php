

<?php




class Clock2
		{

			public $Clock_id;
			public $Clock_type;
			public $Clock_brand;

			public function getProduct(){


			}



		}

		$clock=fopen("product.txt","r");
		//$read=feof($clock);
		//echo $read2=fgets($clock);
		//print_r($read2);
		// $list=list($id,$name,$company)=$read;
		// $implode=explode(",",$list);
		// //list($id,$name,$company=$clock);
		// print_r($implode);

?>


<?php 

/**
 * clock class
 */
 //text file not avaiable in online.
class Clock{
	public $clock_id;
	public $clock_type;
	public $clock_brand;
	public $file;

	function __construct($file){
		$this-> file = $file;
		}

	public function display(){
		$product = fopen($this-> file, "rb");

		while (!feof($product) ) {

			$txtLine = fgets($product);
			$arrs = explode(' ', $txtLine);
			// echo $arrs[0].$arrs[1].$arrs[2]."<BR>";
			echo $this -> clock_id = $arrs[0].' ';
			echo $this -> clock_type = $arrs[1].' ';
			echo $this -> clock_brand = $arrs[2].'<br>';

		}
	}
	
}
$clock1 = new Clock("product.txt");
$clock1 -> display();



