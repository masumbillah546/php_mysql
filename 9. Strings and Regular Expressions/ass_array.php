<?php

//$country=array("Bangladesh"=>"Dhaka", "India"=>"Delhi","Srilanka"=>"Colombo");
$count=array("Monir"=>100, "Masum"=>50,"Amena"=>200);


foreach($count as $persion=>$taka){

	echo $persion." ".$taka."<br>";


}

echo "Total: ". array_sum($count);




?>