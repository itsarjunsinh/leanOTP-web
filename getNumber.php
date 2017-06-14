<?php
echo "Base script working\n";
$fp = fopen("requestQueue", "r") or die("Unable to open file!");
echo fread($fp,filesize("requestQueue"));
echo $fgets($fp);
fclose($fp);
?>
