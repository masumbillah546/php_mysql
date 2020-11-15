<?php

include('db_config.php');


// $query = 'SELECT productName, productCode, buyPrice FROM products WHERE buyPrice > 50.00';
// $result = $mysqli->query($query);
// //printf("There are %f product(s) priced above \$15.99.", $result->num_rows);

// echo $result->num_rows;

//-----------------------------------------------------------------------
// $query = "UPDATE FROM products SET MSRP = 177.00 WHERE MSRP>150.00";
// $result = $mysqli->query($query);
// //printf("There were %d product(s) affected.", $result->affected_rows);
// echo $result->affected_rows;

// printf('%d rows affected' , $result->affected_rows);

//-----------------------------------------------------------------------------

 $query = "DELETE FROM products WHERE byPrice BETWEEN 24.00 AND 40.00";
 $result = $mysqli->query($query);

 echo $mysqli->affected_rows;


?>