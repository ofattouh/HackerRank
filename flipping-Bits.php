<?php

/*
 * Complete the 'flippingBits' function below.
 *
 * The function is expected to return a LONG_INTEGER.
 * The function accepts LONG_INTEGER n as parameter.
 */

// https://www.hackerrank.com/challenges/one-month-preparation-kit-flipping-bits
// https://www.php.net/manual/en/function.sprintf.php

function flippingBits($n) {
    // Write your code here
    
    $d = array();
    $dec = "";
    $m = explode("\n", $n);
    
    // convert decimal input to binary and save it as array
    foreach ($m as $k => $v) {
      $b = sprintf( "%032b", $v);
      $bin = str_split($b);
    }
    
    // flip all binary bits
    foreach ($bin as $k => $v) {
      if ($v == 1) {
        $d[$n][$k] = 0;
      } 
      
      if ($v == 0) {
        $d[$n][$k] = 1;
      }
    }
    
    // convert flipped binary number back to decimal string
    foreach ($d as $k => $v) {
      $dec .= bindec(implode($v));
    }
    
    // print_r($dec);
     
    return $dec;

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$q = intval(trim(fgets(STDIN)));

for ($q_itr = 0; $q_itr < $q; $q_itr++) {
    $n = intval(trim(fgets(STDIN)));

    $result = flippingBits($n);

    fwrite($fptr, $result . "\n");
}

fclose($fptr);
