<?php
  $testFile = "test.txt";
  $testFile2 = "test2.txt";
  $contents = "こんにちは！";
  
  if(is_writable($testFile)) {
    $fp = fopen($testFile, "w");
    fwrite($fp, $contents);
    fclose($fp);
  }

  if(is_readable($testFile2)) {
    $fp = fopen($testFile2, "r");
    while($line = fgets($fp)){
      echo $line.'<br>';
    }
    fclose($fp);
  }else {
    echo "not writable...";
    exit;
  }
?>