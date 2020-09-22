<?php

echo date("l")."<br>";//in this peramiter 'l' is latter; output will be weekend day

//.........................................................................


$file = fopen("test.txt","r");
//Output lines until EOF is reached
while(! feof($file)) {
  $line = fgetc($file);//fgets()
  echo $line. "<br>";
}

fclose($file);




?>