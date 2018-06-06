<?php
$CLIENT_KEY = "BR7234HT3471NM906";

if($_GET[clientkey] === $CLIENT_KEY) {
  echo "Hello World!";
  $num = $_GET["qnum"].PHP_EOL;
  echo $num;
  $fp = fopen('requestQueue', 'a');
  fwrite($fp, $num);
  fclose($fp);
}
else {
  echo "Access Denied.";
}
?>
