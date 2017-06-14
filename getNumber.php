<?php
$fp = fopen('requestQueue', 'r');
fread($fp);
echo $fp[0];
fclose($fp);
?>
