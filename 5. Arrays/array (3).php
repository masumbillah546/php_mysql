<?php

$colors = array("red","blue","green");
list($red, $blue, $green) = $days;

echo $red . " is one of Element of " .'$colors';

?>


<?php
function UserProfile()
{
$user[] = "Sazzad";
$user[] = "sazzad@gmail.com";
$user[] = "0174586596";
return $user;
}
list($name, $email, $phone) = UserProfile();
echo "Name: $name, email: $email, phone: $phone";


?>

<?php


$state[1] = "Pennsylvania";
$state[2] = "New Jersey";

$state[49] = "Hawaii";
print_r($state);


?>
