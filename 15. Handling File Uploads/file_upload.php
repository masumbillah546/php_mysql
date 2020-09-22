<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	<form action="file_upload.php" enctype="multipart/form-data" method="post">
 <label form="email">Email:</label><br>
 <input type="text" name="email" value=""><br>
 <label form="lastname">Last Name:</label><br>
 <input type="text" name="lastname" value=""><br>
 <label form="classnotes">Class notes:</label><br>
 <input type="file" name="classnotes" value=""><br>
 <input type="submit" name="submit" value="Submit Notes">
</form>



<?php


if($_SERVER["REQUEST_METHOD"]=='POST'){

// echo "<pre>";
// print_r($_FILES);
/*
Array
(
    [classnotes] => Array
        (
            [name] => PHP Error Handling, Regular Expression.pdf
            [type] => application/pdf
            [tmp_name] => F:\WDPF44\PHP\tmp\phpE5E4.tmp
            [error] => 0
            [size] => 223638
        )

)
*/

// Set a constant
define ("FILEREPOSITORY","uploads/");
// Make sure that the file was POSTed.
if ($_FILES['classnotes']['error'] == UPLOAD_ERR_OK) {
 if (is_uploaded_file($_FILES['classnotes']['tmp_name'])) {
 // Was the file a PDF?
 if ($_FILES['classnotes']['type'] != "application/pdf") {
 echo "<p>Class notes must be uploaded in PDF format.</p>";
 } else {
 // Move uploaded file to final destination.
 $result = move_uploaded_file($_FILES['classnotes']['tmp_name'],
 FILEREPOSITORY . $_POST['lastname'] . '_' .
$_FILES['classnotes']['name']);

 if ($result == 1) echo "<p>File successfully uploaded.</p>";
 else echo "<p>There was a problem uploading the file.</p>";
 }
 }
}
else {
 echo "<p>There was a problem with the upload. Error code
{$_FILES['classnotes']['error']}</p>";
}


}
?>



</body>
</html>

