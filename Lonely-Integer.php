<?php

/*
 * Complete the 'lonelyinteger' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER_ARRAY a as parameter.
 */

// https://www.hackerrank.com/interview/preparation-kits/one-month-preparation-kit

function lonelyinteger($a) {
    // Write your code here
    
    foreach ($a as $k => $v) {
      $uint[$k] = count(array_keys($a, $v));
    }
    
    $uniqueInt = array_search(1, $uint);
    $lonelyInt = $a[$uniqueInt];
    
    // var_dump($uint);
    
    return $lonelyInt;

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$a_temp = rtrim(fgets(STDIN));

$a = array_map('intval', preg_split('/ /', $a_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = lonelyinteger($a);

fwrite($fptr, $result . "\n");

fclose($fptr);
