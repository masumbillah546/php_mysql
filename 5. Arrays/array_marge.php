

<h2>array_merge</h2>

<?php

$fruits1=["Apple","Orange"];
$fruits2=["Banana"];

$allfruits=array_merge($fruits1,$fruits2);

print_r($allfruits);

?>

<h2>array shuffle</h2>

<!----------------------------------------------------->

<?php

shuffle($allfruits);

echo "<pre>";
print_r($allfruits);

?>

<!----------------------------------------------------->

<h2>array Combine</h2>

<?php


$index=[1,2,3,"D"];
$value=["Apple", "Orange","Mango","Banana"];

$combine=array_combine($index, $value);

echo "<pre>";

print_r($combine);



?>

<!----------------------------------------------------->

<h2>array slice</h2>

<?php

$districts=["Dhaka","Chittagong","Comilla","Feni","Chandpur"];

print_r(array_slice($districts, 2));//-2 removes value from end;


?>

<!----------------------------------------------------->

<h2>array splice</h2>

<?php

$districts2=["Dhaka","Chittagong","Comilla","Feni","Chandpur"];



$subset = array_splice($districts2, 2,-1);//
echo "<pre>";

print_r($districts2);
print_r($subset);


?>

<!----------------------------------------------------->

<h2>array diff(different)</h2>

<?php

$Main=["Dhaka","Chittagong","Comilla","Feni","Chandpur"];
$districts4=["Sylhet","Chittagong","Comilla","Feni","Chandpur"];
//$districts5=["Khulna","Chittagong","Comilla","Feni","Chandpur"];

$diff= array_diff($Main, $districts4);

print_r($diff);


?>