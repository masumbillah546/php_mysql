<?php

$handle = fopen('wfile.txt', 'r');
//$g=fwrite($handle,"hello");
echo fgets($handle);
//echo file_get_contents("wfile.txt");

$handle2 = scandir('F:\\');
//$handle2 = opendir('F:/');
echo "<pre>";
print_r($handle2);
echo "<pre>";
//-----------------------------------------
$handle3 = file("wfile.txt");
//print_r($handle3);


?>