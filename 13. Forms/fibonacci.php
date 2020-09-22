<?php

function fibonacci($number)
{
    if ($number <= 2) {
        return 1;
    }
    return fibonacci($number - 1) + fibonacci($number - 2);
}

if(isset($_POST['submit'])) {
	$num = $_POST['mn'];
	
	echo fibonacci($num);
}	
?>

<form method="post" action="">
    <p><input type="text" name="mn" placeholder="Enter a number"></p>
    <input type="submit" name="submit" value="Prime Numbers">
     
</form>