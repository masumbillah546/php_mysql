<?php

$id = $_GET['id'];

include("dbconfig.php");

$delete = "DELETE FROM meal WHERE id='$id'";

$row = mysqli_query($con, $delete);

if($row){
	header("location:index.php");
}


?>