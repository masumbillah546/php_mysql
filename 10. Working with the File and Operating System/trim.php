<?php

$x=" Hello";
$y="World";
echo $x=ltrim($x)."<br>";


echo basename("path/home/index.php")."<br>"; //new function

echo dirname("path/home/index.php")."<br>"; //new function

echo "<pre>";

print_r( pathinfo("path/home/index.php"))."<br>"; //new function

echo  realpath("strstr.php")."<br>"; //new function

echo $bytes= filesize("strstr.php")." Bytes<br>"; //new function
echo $kb= round($bytes/1024,2)." Kb<br>"; //new function





//disk_free_space

 $kb2gb=dirname("strstr.php"); //new function
 $space=disk_free_space($kb2gb);
 echo $output=round($space/1024/1024/1024,2)." GB<br>";

//echo disk_total_free_space($kb2gb)." GB";

?>