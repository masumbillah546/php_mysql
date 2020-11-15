<?php

if(isset($_POST["submit"])){

	$n=$_POST["number"];
}


function fectorial($x){

	if($x==0){
		return 1;
}else{

return $x*fectorial($x-1);

}
echo fectorial($n);

}

?>



<form action="" method="post">
	
Input a number: <input type="number" name="number">
<input type="submit" name="submit" value="Submit">


</form>


<?php





?>