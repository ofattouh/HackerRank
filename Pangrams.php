<?php

/*
 * Complete the 'pangrams' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts STRING s as parameter.
 */

// https://www.hackerrank.com/challenges/one-month-preparation-kit-pangrams

function pangrams($s) {
    // Write your code here
    
    $output = '';
    $alphabets = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");

    $s = strtolower($s);
    $s = str_replace(" ", "", $s);
    $s_array = str_split($s);
    
    foreach($s_array as $k => $v) {
      if (in_array($v, $alphabets)) {
        $found[$v] = $v;
      }
    }
    
    if (sizeof($found) === sizeof($alphabets))  {
      $output = "pangram";
    }
    else {
      $output = "not pangram";
    }

    return $output;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$s = rtrim(fgets(STDIN), "\r\n");

$result = pangrams($s);

fwrite($fptr, $result . "\n");

fclose($fptr);
