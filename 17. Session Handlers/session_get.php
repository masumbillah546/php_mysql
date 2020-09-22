
<?php
 session_start();
        // $_SESSION['start'] = time();
        // $_SESSION['expire'] = $_SESSION['start'] + (20);

        // $now = time();
        // if ($now > $_SESSION['expire']) {
        //     session_unset();
        //     session_destroy();
        //     return true;
        // }
        // else
        // {
        //     return false;
        // }


function isExpired()
    {
        // session_start();
        $now = time();
        if ($now > $_SESSION['expire']) {
            session_unset();
            session_destroy();
            return true;
        }
        else
        {
            return false;
        }
    }

$f = isExpired();
if(!$f){

       
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".";

//echo $_SESSION['expire'];


}

//print_r($_SESSION);
?>

</body>
</html>
