<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

	<h2>A,B,C,D,E,F output</h2>
	
    <form method="post">
    
    <input type="text" name="text" >
    <input type="submit" name="submit" value="Submit">
    
    </form>
    
    
    <?php
    
	if(isset($_POST["submit"])){
		
		
		$l=strtolower($_POST["text"]);
		
		echo letter($l);
		
		
		}
		
		
		function letter($x){
			
			
			
			if($x=="a"){
				
				return " Excelent";
				
				}elseif($x=="b"){
				
				return " Good";
				
				}elseif($x=="c"){
				
				return " Fail";
				
				}elseif($x=="d"){
				
				return " Poor";
				
				}elseif($x=="f"){
				
				return " Failure";
				
				}else{
					
					return false;
					
					}
			
			
			}
	
	
	
	?>

</body>
</html>