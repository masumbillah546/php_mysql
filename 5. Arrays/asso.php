<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

	<?php

	$countris=[
			"Bangladesh"=>"Dhaka",
			"India"=>"Delhi",
			"Srilanka"=>"Colombo",
			"Australia"=>"Canbera",
			"Pakistan"=>"Islamabad"];
			
			
			ksort($countris);

			// echo "<pre>";

			// print_r($countris);
			
			
		foreach($countris as $name=>$capital){
			
			echo "$name $capital<br>";
			
			
			}
			
			
			
			
	
	?>
    
    
</body>
</html>