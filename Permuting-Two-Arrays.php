<?php

/*
 * Complete the 'twoArrays' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts following parameters:
 *  1. INTEGER k
 *  2. INTEGER_ARRAY A
 *  3. INTEGER_ARRAY B
 */

// https://www.hackerrank.com/challenges/one-month-preparation-kit-two-arrays/

function twoArrays($k, $A, $B) {
    // Write your code here
     
    $output = '';
    sort($A);
    sort($B);
    $B2 = array();
    $B2j = array();

    // mutate ONLY $B array into $B2 and use $A as reference
    for ($i=0; $i<sizeof($A); $i++) {
      // echo "\n";
      
      for ($j=0; $j<sizeof($B); $j++) {

        // Statisfy the relation $k and makesure not to use same index value twice
        if ($A[$i] + $B[$j] >= $k && !in_array($j, $B2j)) {
          // echo "\n$i:$j=(".$A[$i].",".$B[$j].")";
          $B2[$i] = $B[$j];
          $B2j[$j] = $j;
          break;
        }
      }
    }
    
    // Check if query output is correct according to each input
    if (sizeof($B) === sizeof($B2)) {
      $output .= "YES";
    } else {
      $output .= "NO";
    }
    
    return $output;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$q = intval(trim(fgets(STDIN)));

for ($q_itr = 0; $q_itr < $q; $q_itr++) {
    $first_multiple_input = explode(' ', rtrim(fgets(STDIN)));

    $n = intval($first_multiple_input[0]);

    $k = intval($first_multiple_input[1]);

    $A_temp = rtrim(fgets(STDIN));

    $A = array_map('intval', preg_split('/ /', $A_temp, -1, PREG_SPLIT_NO_EMPTY));

    $B_temp = rtrim(fgets(STDIN));

    $B = array_map('intval', preg_split('/ /', $B_temp, -1, PREG_SPLIT_NO_EMPTY));

    $result = twoArrays($k, $A, $B);

    fwrite($fptr, $result . "\n");
}

fclose($fptr);
