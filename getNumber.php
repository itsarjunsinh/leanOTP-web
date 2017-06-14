<?php
echo "Base script working\n";
$fp = fopen("requestQueue", "r+") or die("Unable to open file!");
$queue = file_get_contents($fp);
$first_num = substr($queue, 0, 9);
echo $queue;
echo $first_num;
echo fgets($fp);
file_put_contents($fp, substr($queue, 9 + 1));
fclose($fp);
?>
