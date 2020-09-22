
<?php
// Start the session
//session_destroy();

 session_start();
  $_SESSION['start'] = time();
  $_SESSION['expire'] = $_SESSION['start'] + (20);




?>
<!DOCTYPE html>
<html>
<body>

<?php

print_r($_SESSION);
// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";

 



?>

</body>
</html>
