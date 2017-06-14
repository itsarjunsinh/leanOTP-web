<?php
$fp = fopen('requestQueue', 'w');
fread($fp, $num);
fclose($fp);
?>
