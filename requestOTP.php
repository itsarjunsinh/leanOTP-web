<?php
echo "Hello World!";
$num = $_GET["qnum"].PHP_EOL;
echo $num;
$fp = fopen('requestQueue', 'a');
fwrite($fp, $num);
fclose($fp);
?>
