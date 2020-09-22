
<h2>in_array</h2>


<?php

$state="India";

$states=["Bangladesh", "India", "Srilanka"];


if( in_array($state, $states) ){

echo "Yes ".$state;

}else{

"No";

};

?>
<!----------------------------------------------------->

<h2>array_key_exists</h2>
<?php

$population=array("Dhaka"=>10, "Khulna"=>3,10);


echo array_key_exists("Dhaka", $population);

echo "<br>";

if(array_key_exists("comilla", $population)){

	echo "True";
}else{

echo "False";

};

?>
<!----------------------------------------------------->
<h2>Array Search</h2>

<?php

echo "<br>";
echo array_search(10, $population);

?>
<!----------------------------------------------------->
<h2>Array Keys</h2>
<?php
echo "<br>";
//array_keys($population);
echo "<pre>";
print_r(array_keys($population));


?>
<!----------------------------------------------------->
<h2>array_values</h2>

<?php

print_r(array_values($population));

?>
<!----------------------------------------------------->
<h2>sizeof</h2>
<?php

echo sizeof($population);

?>

<!----------------------------------------------------->

<h2>array_count_values</h2>
<?php
echo "pre";
$a=array_count_values($population);
print_r($a);

?>

<!----------------------------------------------------->
<h2>array_unique value</h2>
<?php
echo "pre";
$a=array_unique($population);
print_r($a);

?>

<!----------------------------------------------------->
<h2>array sort</h2>
<?php
echo "pre";
sort($population);
print_r($population);

?>
<!----------------------------------------------------->
<h2>array reverse</h2>
<?php
echo "pre";
$a=array_reverse($population);
print_r($a);

?>
<!----------------------------------------------------->
<h2>array flip</h2>
<?php
echo "pre";
$a=array_flip($population);
print_r($a);

?>