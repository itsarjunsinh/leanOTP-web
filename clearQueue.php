<?php
$DELIVERY_KEY = "A1231B34634D3489";

if($_GET[deliverykey] === $DELIVERY_KEY) {
  $fp = fopen('requestQueue', 'w');
  fwrite($fp, "");
  fclose($fp);
}
else {
  echo "Access Denied.";
}
?>
