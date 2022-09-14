<?php

/*
 * Complete the 'diagonalDifference' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts 2D_INTEGER_ARRAY arr as parameter.
 */

// https://www.hackerrank.com/challenges/one-month-preparation-kit-diagonal-difference/

function diagonalDifference($arr) {
    // Write your code here
    
    $dSumR = 0;
    $dSumL = 0;
    $absDiff = 0;
    $numRowsCols = sizeof($arr);
    
    // calculate right diagonal
    for ($i=1,$j=$numRowsCols-2; $i<=$numRowsCols-2;$i++,$j--) {
      $dSumR += $arr[$i][$j];
    }

    // calculate left diagonal
    foreach ($arr as $i => $arr1d) {
      foreach ($arr1d as $j => $row) {
        if ($i == $j){
          $dSumL += $row;
        }
      }
    }

    // calculate absolute diagonals difference
    $dSumR = $dSumR + $arr[0][$numRowsCols-1] +
        $arr[$numRowsCols-1][0];
    $absDiff = abs($dSumL - $dSumR);
  
    // print_r($arr);
    return $absDiff;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$arr = array();

for ($i = 0; $i < $n; $i++) {
    $arr_temp = rtrim(fgets(STDIN));

    $arr[] = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
}

$result = diagonalDifference($arr);

fwrite($fptr, $result . "\n");

fclose($fptr);
