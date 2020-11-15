<?php
 
 function authenticate_user() {
 header('WWW-Authenticate: Basic realm="Secret Stash"');
 header("HTTP/1.0 401 Unauthorized");
 exit;
 }
 
 if (! isset($_SERVER['PHP_AUTH_USER'])){
 authenticate_user();
 } 
 else {

 $user = $_SERVER['PHP_AUTH_USER'];
 $pass = hash('sha1',$_SERVER['PHP_AUTH_PW']);

 $userfile=fopen("user.txt", "r+");


 $string=fgets($userfile);
 $list=explode(" ", $string);
 list($auser, $apass)=$list;
 if($auser!=$user){
  authenticate_user();
 }
 elseif ($apass!=$pass) {
  authenticate_user();
 }
 else{
	header("location: success_user.php");
 }
}
?>