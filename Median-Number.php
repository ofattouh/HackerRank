<?php



/*
 * Complete the 'findMedian' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

// Mock Test - 1 month preparation kit week 1

function findMedian($arr) {
    // Write your code here
    
    sort($arr);
    $n = sizeof($arr);
    
    // Odd numbers of elements
    if ($n % 2 !== 0) {
      $median = $arr[$n /2];
      
    }
    else {
      $median = ($arr[$n /2] + $arr[$n /2 + 1]) / 2;
    }
    
    return $median;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = findMedian($arr);

fwrite($fptr, $result . "\n");

fclose($fptr);
