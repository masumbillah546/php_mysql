<?php



function prime($x){

	if($x==1){
		return $x." is not prime number";
	}elseif($x==2){

		return $x." is a prime number";

	}

	for($i=2; $i<$x; $i++){


	if($x%$i==0){

		return $x." is not prime number";
	}
		
	

}
return $x." is prime number";



}

echo prime(99);



?>