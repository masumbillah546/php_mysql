<?php


	
function myfunc($x){


if($x==0){
	return 1;
}else{
	return $x*myfunc($x-1);
}

}

echo "The fectorial result is: ".myfunc(5);



?>