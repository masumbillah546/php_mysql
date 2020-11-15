<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h2>Prime Range</h2>


	<form method="post">

	Start Number: <input type="number" name="number"><br><br>
	End Number: <input type="number" name="number2">
    <input type="submit" name="submit" value="Check"><br><br>
    
 </form>
 
 
	 <?php
	 
	 
	 if(isset($_POST["submit"])){
		 
		 // $n=$_POST["number"];
		 // $n2=$_POST["number2"];
		 
		  // prime($n,$n2);

	 	$x=$_POST["number"];
	    $y=$_POST["number2"];


	    prime($x,$y) 
	    echo "<br><br>";
	    prime2($x,$y); 
		 
		 
		 
		 }


		 
     
     
     function prime($x,$y){

     	echo "<h2>Prime numbers in $x-$y:<h2>";
     
     	for($x; $x<=$y; $x++){         //loop execute by 123456...
	 	
				 $p=0;
				 for($i=1; $i<=$x; $i++){
					
					 if($x%$i==0){ $p++;}

					}


					if($p==2){echo $x.", ";}

					

	}
	
}



		 function prime2($x,$y){

		 	echo "Those numbers are not prime:";

     	for($x; $x<=$y; $x++){         //loop execute by 123456...
	 	
				 $p=0;
				 for($i=1; $i<=$x; $i++){
					
					 if($x%$i==0){ $p++;}

					}


					if($p!=2){echo $x.", ";}

					

	}

	 	 
}
     
     
     
     ?>

	
</body>
</html>