
<table border="2">
	



<?php


echo "<tr><th>ID:</th><td>" .$id=$_POST['id']."</td></tr>";
echo "<tr><th>Name:</th><td>".$name=$_POST['name']."</td></tr>";
echo "<tr><th>Designation:</th><td>".$des=$_POST['des']."</td></tr>";
echo "<tr><th>Basic:</th><td>".$basic=$_POST['basic']."</td></tr>";
echo "<tr><th>Home Rent:</th><td>".$rent=$_POST['rent']."</td></tr>";
echo "<tr><th>Transpost:</th><td>".$trans=$_POST['trans']."</td></tr>";
echo "<tr><th>Total</th><td>".$total=$basic+$rent+$trans."</td></tr>";

// if isset($_POST('submit')){

// 	echo "ID: ".$id=$_POST('id');


// }


?>

</table>