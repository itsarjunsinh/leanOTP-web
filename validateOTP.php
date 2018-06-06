<?php
$CLIENT_KEY = "BR7234HT3471NM906";

if($_GET[clientkey] === $CLIENT_KEY) {
  echo "Hello World!";
  $num = $_GET["qnum"].PHP_EOL;
  $otp = $_GET["otp"].PHP_EOL;

  $pos = getLineWithString($num, $otp);

  if($pos !== -1){
    //Found
    $numbers = file(processedNumStack);
    $otps = file(processedOTPStack);

    if(($otp === $otps[$pos]) && ($num === $nnumbers[$pos])){
      echo "True"
    } else {
      echo "False";
    }
  }
  else {
    echo "False";
  }

}
else {
  echo "Access Denied.";
}

function getLineWithString($fileName, $str) {
    $lines = file($fileName);
    foreach ($lines as $lineNumber => $line) {
        if (strpos($line, $str) !== false) {
            return $line;
        }
    }
    return -1;
}
?>
