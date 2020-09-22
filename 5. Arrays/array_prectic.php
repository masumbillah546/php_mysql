
<table border="2" cellspacing="0">
	<tr>
		<th>Name</th>
		<th>Email</th>
		<th>Number</th>
	</tr>

<?php

$customers=array();

$customers[]=array("Rahim", "rahim@gmail.com", "01785654");
$customers[]=array("Karim", "karim@gmail.com", "017833654");
$customers[]=array("Mamun", "mamun@gmail.com", "017255424");


foreach($customers as $customer){
	
	echo "<tr>";

			for($i=0; $i<count($customer); $i++){

				 echo "<td>".$customer[$i]."</td>";
			}
			
	echo "</tr>";
	
}

?>

</table>