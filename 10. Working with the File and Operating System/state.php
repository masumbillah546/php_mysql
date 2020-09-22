<?php

$file="state.php";
printf("File last accessed: %s", date("m-d-y g:i:sa", fileatime($file)));
echo "<br>";
echo "<br>";
printf("File last change: %s", date("m-d-y g:i:sa", filectime($file)));



?>