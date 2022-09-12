<?php

/*
 * Complete the 'timeConversion' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts STRING s as parameter.
 */

// https://www.hackerrank.com/interview/preparation-kits/one-month-preparation-kit

function timeConversion($s) {
  // Write your code here
    
  $date = date_create($s);
  $t = date_format($date,"H:i:s");

  return $t;

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$s = rtrim(fgets(STDIN), "\r\n");

$result = timeConversion($s);

fwrite($fptr, $result . "\n");

fclose($fptr);

?>