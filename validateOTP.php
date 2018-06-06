<?php
$CLIENT_KEY = "BR7234HT3471NM906";

if($_GET[clientkey] === $CLIENT_KEY) {
  $num = $_GET["qnum"].PHP_EOL;
  $otp = $_GET["otp"].PHP_EOL;

  $pos = getLineWithString("processedNumStack", $num);

  if($pos !== -1){
    //Found
    $numbers = file("processedNumStack");
    $otps = file("processedOTPStack");

    if(($otp === $otps[$pos]) && ($num === $numbers[$pos])){
      echo "True";
    } else {
      echo "False";
    }

  }
  else {
    echo "False - Not found";
  }

}
else {
  echo "Access Denied.";
}

function getLineWithString($fileName, $str) {
    $lines = file($fileName);
    foreach ($lines as $lineNumber => $line) {
        if (strpos($line, $str) !== false) {
            return $lineNumber;
        }
    }
    return -1;
}
?>
