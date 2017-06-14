<?php
echo "Base script working\n";
$fp = fopen("requestQueue", "r") or die("Unable to open file!");
print_r(file($fp));
echo $fgets($fp);
fclose($fp);
?>
