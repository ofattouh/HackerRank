<?php

/*
 * Complete the 'birthday' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER_ARRAY s
 *  2. INTEGER d
 *  3. INTEGER m
 */

// https://www.hackerrank.com/challenges/one-month-preparation-kit-the-birthday-bar

function birthday($s, $d, $m) {
  // Write your code here
  
  $numberOfWays = 0;

  for ($i=0; $i<sizeof($s); $i++) {
    
    // Slice $s by offset $i and $m length and sum slice
    $slice = array_slice($s, $i, $m);
    $sliceSum = array_sum($slice);

    // Satisfy relation condition bypassing 1 element arrays
    if ($m === 1 || $sliceSum === $d) {
      // echo "\ni=$i, slice: ".array_sum($slice); 
      // print_r($slice);
      $numberOfWays += 1;
    }
  }
  
  return $numberOfWays;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$s_temp = rtrim(fgets(STDIN));

$s = array_map('intval', preg_split('/ /', $s_temp, -1, PREG_SPLIT_NO_EMPTY));

$first_multiple_input = explode(' ', rtrim(fgets(STDIN)));

$d = intval($first_multiple_input[0]);

$m = intval($first_multiple_input[1]);

$result = birthday($s, $d, $m);

fwrite($fptr, $result . "\n");

fclose($fptr);
