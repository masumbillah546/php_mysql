<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		span{
			font-size: 20px;
		}
	</style>
</head>
<body>
	
<form action="" method="get">

Name: <input name="fname" />

Age: <input name="age" />

<input type="submit" />

</form>
<span>
<?php

echo "<pre>";
$dns=dns_get_record("masumbillah546.freevar.com");
print_r($dns);
//print_r($_SERVER);
echo "<br>";
print_r($_ENV);

?>
</span>
</body>
</html>