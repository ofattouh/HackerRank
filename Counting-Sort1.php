<?php

/*
 * Complete the 'countingSort' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

// https://www.hackerrank.com/challenges/one-month-preparation-kit-countingsort1

function countingSort($arr) {
    // Write your code here
    
    $output = array();
    $sortedOutput = array_fill(0, 100, 0);
    $output = array_count_values($arr);
    
    // Store the frequency of each index values
    for ($i=0; $i < 100; $i++) {
      if (in_array($i, $arr)) {
        $sortedOutput[$i] = $output[$i];
      }
    }
    
    // print_r($output);
    
    return $sortedOutput;

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = countingSort($arr);

fwrite($fptr, implode(" ", $result) . "\n");

fclose($fptr);
