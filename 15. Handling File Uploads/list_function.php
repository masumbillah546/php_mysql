
<table border="2" cellspacing="0" cellpadding="3">
	<tr>
		<th>Name</th>
		<th>Area</th>
		<th>District</th>
	</tr>


<?php


$users=file("new_file.txt");


foreach($users as $user){



list($name,$area,$district) = explode("|",$user);


echo "<tr><td>{$name}</td>";
echo "<td>{$area}</td>";
echo "<td>{$district}</td><tr>";




}



?>
</table>