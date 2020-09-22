<?php



 $countries=['Bangladesh'=>'Dhaka','Srilanka'=>'Colombo','SaudiArab'=>'Riyadh','India'=>'Dilhi','Pakistan'=>'Islamabad'];

 asort($countries);

 foreach($countries as $country=>$Capital){

 	echo "<b>".$country."</b>: ".$Capital."<br>";
 }




?>