<?php

echo date("m-d-Y h:i:sa")."<br>";
echo checkdate(4,30,2019) ? "valid":"invalid";


echo "<pre>";

print_r(getdate(time()))."<br>";// Timestamp



echo mktime(20,35,00, 3,10,2020)."<br>";



?>

<!----------------------------------------------------------------->

<?php



$now = mktime();
$taxDeadline = mktime(0,0,0,4,15,2020);
// Difference in seconds
$difference = $taxDeadline - $now;
// Calculate total hours
$hours = round($difference / 60 / 60);
echo "Only ".number_format($hours)." hours until the tax deadline!";


?>