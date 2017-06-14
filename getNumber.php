<?php
$fp = fopen("requestQueue", "r+") or die("Unable to open file!");
$queue = file_get_contents("requestQueue");
$first_num = substr($queue, 0, 10);
echo "Number:".$first_num;
file_put_contents("requestQueue", substr($queue, 10 + 1));
fclose($fp);
?>
