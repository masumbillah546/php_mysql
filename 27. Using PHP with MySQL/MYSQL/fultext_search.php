
<?php
 // If the form has been submitted with supplied keywords
 if (isset($_POST['keywords'])) {
 // Connect to server and select database
 $db = new mysqli("localhost", "root", "", "classicmodels");
 // Create the query
 $stmt = $db->prepare("SELECT productCode, productName, MSRP FROM products WHERE MATCH(productDescription) AGAINST(?)");
 $stmt->bind_param('s', $_POST['keywords']);
 $stmt->execute();
 $stmt->store_result();
 // Output retrieved rows or display appropriate message
 if ($stmt->num_rows > 0) {
 $stmt->bind_result($prCode, $prName, $prDsc, $msrp);
 while ($result->fetch())
 echo "";
 } else {
 printf("No results found.");
 }
 }
?>

<p>
Search the online resources database:<br>
<form action="fulltextsearch.php" method="post">
 Keywords:<br>
 <input type="text" name="keywords" size="20" maxlength="40" value=""><br>
 <input type="submit" value="Search!">
</form>
</p>