<?php



$date= new DateTime("December 4 2020 9:55");
echo $date->format("d-m-Y")."<br>";

$endDate=new Datetime("2020-06-30");
$todayDate= new DateTime('today');
$span=$endDate->diff($todayDate);

echo "Your subscription ends in $span->days days!<br>";


echo "<pre>";
print_r($span);



?>