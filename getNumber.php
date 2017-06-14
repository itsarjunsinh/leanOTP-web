<?php
echo "Base script working\n";
$fp = fopen('requestQueue', 'r') or die("Unable to open file!");
echo $fgets($fp);
fclose($fp);
?>
