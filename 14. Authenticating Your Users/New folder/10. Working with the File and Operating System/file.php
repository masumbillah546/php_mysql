<?php
 
 $users = file('users.txt');

 foreach ($users as $user) {

 list($name, $site) = explode(' ', $user);


 $site = trim($site);

 echo "<a href='https://{$site}' target='_blank'>{$name}</a></br>";

 }


 
?>