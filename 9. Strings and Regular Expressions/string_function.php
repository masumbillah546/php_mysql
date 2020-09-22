<?php


$day="Today is Women day";

echo strlen($day)."<br>";


?>

<?php

$pass1="abcd";
$pass2="abcd";

echo strcasecmp($pass1, $pass2)."<br>";

?>

<?php


 $password = "3312345";
 if (strspn($password, "3312345") == strlen($password))
 echo "The password cannot consist solely of numbers!"."<br>";



?>


<?php


 $lower = "ABCD";
 
 echo strtolower($lower)."<br>";



?>

<?php


 $upper = "abcd";
 
 echo strtoupper($upper)."<br>";
 echo $upper1= ucfirst($upper)."<br>";
 echo ucwords($upper)."<br>";
 echo lcfirst($lower)."<br>";



?>

<?php

$newline="Amar sonar bangla
			ami tomay valobasi";
	echo nl2br($newline);



?>
<!-- <?php

// echo htmlentities(string);

?> -->