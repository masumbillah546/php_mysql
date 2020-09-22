<?php
function loadClass($class_name) {
    include "Classes/$class_name.php";
}
 
spl_autoload_register("loadClass");
 
new Member;
echo "<br>";
new Topic;
?>