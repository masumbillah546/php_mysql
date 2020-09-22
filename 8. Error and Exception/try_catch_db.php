<?php
try {
$con = @mysqli_connect("localhost","root","p");
if ($con){
echo "you are connected";
}else{
throw new Exception('Could not connect', 420);
}
}
catch (Exception $e) {
echo $e->getCode(). ' : An error occured : ' . $e->getMessage();
}
?>