<table border="1" cellspacing="0">


<?php
echo "<pre>";
//print_r($_SERVER);

foreach($_SERVER as$key=>$value){
	echo "<tr><td>".$key."</td><td>".$value."</td></tr>";
}




?>
</table>