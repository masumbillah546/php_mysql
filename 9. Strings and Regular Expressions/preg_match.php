

<form action="" method="post">
	
Name: <input type="text" name="name" value="<?php if(isset($name)) echo $name ?>">
<input type="submit" value="Submit" name="submit">

</form>



<?php

if(isset($_POST["submit"])){

$name =$_POST["name"];
if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
 echo $nameErr = "Only letters and white space allowed";
}else{
	echo "Data is validated"."<br>";
}

}

//--------------------------------------------------------

$line="vimi is the greatest word processor ever created! Oh vimi, how I love thee! \n masum";
if (preg_match("/. masum/i",$line)) {
 echo "Match found";
}

?>