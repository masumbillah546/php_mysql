<?php

include("db_config.php");

 $query = 'SELECT productCode, productName, buyPrice FROM products WHERE buyPrice>80.00 ORDER BY productName';
 // Create a statement object
 $stmt = $mysqli->stmt_init();

 // Prepare the statement for execution
 $stmt->prepare($query);

 // Execute the statement
 $stmt->execute();

 // Bind the result parameters
 $stmt->bind_result($code, $pname, $price);

 // Cycle through the results and output the data
 while($stmt->fetch()){
 	echo "Product Code: ".$code."<br>";
 }

?>