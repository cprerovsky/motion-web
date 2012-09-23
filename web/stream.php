<?php
  set_time_limit(0);
  $fp = fsockopen ("localhost", 8081, $errno, $errstr, 30);
  if (!$fp) {
    echo "$errstr ($errno)<br>\n";
  } else {
    $urlstring = "GET / HTTP/1.0\r\n\r\n";
    fputs ($fp, $urlstring);
    while ($str = trim(fgets($fp, 4096)))
      header($str);
    fpassthru($fp);
    fclose($fp);
  }
?>
