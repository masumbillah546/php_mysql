
<?php
	//$date = "2019-01-09";

if(isset($_POST["submit"])){
	$date = $_POST['date'];

	$d = date("d", strtotime($date)); //Date
	$l = date("l", strtotime($date)); //Weekday
	$y = date("Y", strtotime($date)); //Year
	$m = date("M", strtotime($date)); //Month

echo "$date = Year:$y, Month:$m, Day:$l, Date:$d";
}

?>

<form method="post" action="">
    <p><input type="date" name="date" placeholder="Select a date"></p>
    <input type="submit" name="submit" value="Check">
     
</form>