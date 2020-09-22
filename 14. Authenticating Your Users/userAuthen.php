<?php


$secret = '68c46a606457643eab92053c1c05574abb26f861';
if (($_SERVER['PHP_AUTH_USER'] != 'client') ||
 (hash('sha1', $_SERVER['PHP_AUTH_PW']) != $secret)) {
 header('WWW-Authenticate: Basic Realm="Secret Stash"');
 header('HTTP/1.0 401 Unauthorized');
 print('You must provide the proper credentials!');
 exit;
}



?>
<h2>Welcome</h2>