<?php

header('WWW-Authenticate:Basic');

$val = "secret";
$hash_val = hash('sha256', $val);
// $hash_val = "2bb80d537b1da3e38bd30361aa855686bde0eacd7162fef6a25fe97
//bf527a25b";
echo hash('hsa1',"masum");

?>