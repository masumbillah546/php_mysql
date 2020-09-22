


<?php




 $userinfo = "Name: <b>Zeev Suraski</b> <br> Name: <b>Anid Gutmonds</b>";

 preg_match_all("/<b>(.*)<\/b>/U", $userinfo, $pat_array);

 //printf("%s <br /> %s", $pat_array[0][0], $pat_array[0][1]);

 for($i=0; $i<count($pat_array); $i++){

	echo $pat_array[0][$i]."<br>";

 }

 //echo $pat_array[0][1];



 	
 





?>



