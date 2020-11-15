
<form action="" method="post">
	
	The number: <input type="number" name="number">
	<input type="submit" value="Submit" name="submit">

</form>


<?php

	if(isset($_POST['submit'])){
		$n=$_POST['number'];
		echo prime($n);
	}



function prime($x){



	if($x==1){

		return $x." is not a prime number";

	}elseif($x==2){

		return $x." is a prime number";

	}else{

		for($i=2; $i<$x; $i++){


			if($x%$i==0){
				return $x." is not prime number";
			}

		}

	}

return $x." is a prime number";

}




?>