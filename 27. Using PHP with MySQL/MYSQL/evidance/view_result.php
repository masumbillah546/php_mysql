<?php


$db = new mysqli('localhost','root','','mycompany');

 $result = $db->query("SELECT * FROM product_view");

 		while($row= mysqli_fetch_assoc($result)){

 			echo $row['id']."  -  ".$row['name']."  -  ".$row['manufacturer_id']."<br>";
 		}

?>