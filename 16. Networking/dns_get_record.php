<?php

echo "<pre>";
 $result = dns_get_record("masumbillah546.000webhostapp.com");
 //$result = dns_get_record("prothomalo.com");
 print_r($result);
?>


<?php
 getmxrr("wjgilmore.com", $mxhosts);
 print_r($mxhosts);
?>

<?php
 echo "HTTP's default port number is: ".getservbyname("pop3", "tcp");
?>