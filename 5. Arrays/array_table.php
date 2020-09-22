
<table border="2" cellspacing="0" cellpadding="5">

	<tr>

		<th>Id</th>
		<th>Name</th>
		<th>Email</th>
		<th>Number</th>
	</tr>





<?php


$customers=array();

$customers[]=array("Rahim", "rahim@gmail.com", "01785654");
$customers[]=array("Karim", "karim@gmail.com", "017833654");
$customers[]=array("Mamun", "mamun@gmail.com", "017255424");


//echo "<pre>";

//print_r($customers);

	$id=1;

foreach($customers as $customer){

	list($name, $email, $phone)=$customer;


	echo "<tr><td>".$id++."</td>";
	echo "<td>".$name."</td>";
	echo "<td>".$email."</td>";
	echo "<td>".$phone."</td><tr>";

	//vprintf("Name: %s Email: %s Phones: %s"."<br>", $customer);

}




?>

</table>