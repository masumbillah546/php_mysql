<?php

function my(){


static $x=2;
	 // $x++;
echo $x+4;

}

echo my()." 1st<br><hr>";
echo my()." 2nd<br><hr>";
echo my()." 3rd<br>";


?>