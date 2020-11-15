<?php

$id = $_GET['id'];

include("dbconfig.php");

$delete = "DELETE FROM students2 WHERE id='$id'";

$row = mysqli_query($con, $delete);

if($row){
	header("location:studentslist.php");
}


?>