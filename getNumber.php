<?php
$DELIVERY_KEY = "A1231B34634D3489";

if($_GET[deliverykey] === $DELIVERY_KEY) {
  $fp = fopen("requestQueue", "r+") or die("Unable to open file!");
  $queue = file_get_contents("requestQueue");
  $first_num = substr($queue, 0, 10);
  echo $first_num;
  file_put_contents("requestQueue", substr($queue, 10 + 1));
  fclose($fp);
  $fp = fopen("OTPList", "r+") or die("Unable to open file!");
  $otplist = file_get_contents("OTPList");
  $first_otp = substr($otplist, 0, 6);
  echo $first_otp;
  file_put_contents("OTPList", substr($otplist, 6 + 1));
  fclose($fp);
  $fp = fopen("OTPList","a") or die("Unable to open file!");
  fwrite($fp,$first_otp.PHP_EOL);
  fclose($fp);

  //Add Number & OTP to processed stack.
  $first_num=$first_num.PHP_EOL;
  $first_num .= file_get_contents('processedNumStack');
  file_put_contents('processedNumStack', $first_num);
  $first_otp=$first_otp.PHP_EOL;
  $first_otp .= file_get_contents('processedOTPStack');
  file_put_contents('processedOTPStack', $first_otp);
}
else {
  echo "Access Denied.";
}
?>
