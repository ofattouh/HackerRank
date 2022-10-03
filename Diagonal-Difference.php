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

/***************************************************************8
 Given a square matrix, calculate the absolute difference between the sums of its diagonals.

For example, the square matrix

is shown below:

1 2 3
4 5 6
9 8 9  

The left-to-right diagonal =
. The right to left diagonal = . Their absolute difference is

.

Function description

Complete the

function in the editor below.

diagonalDifference takes the following parameter:

    int arr[n][m]: an array of integers

Return

    int: the absolute diagonal difference

Input Format

The first line contains a single integer,
, the number of rows and columns in the square matrix .
Each of the next lines describes a row, , and consists of space-separated integers

.

Constraints

Output Format

Return the absolute difference between the sums of the matrix's two diagonals as a single integer.

Sample Input

3
11 2 4
4 5 6
10 8 -12

Sample Output

15

Explanation

The primary diagonal is:

11
   5
     -12

Sum across the primary diagonal: 11 + 5 - 12 = 4

The secondary diagonal is:

     4
   5
10

Sum across the secondary diagonal: 4 + 5 + 10 = 19
Difference: |4 - 19| = 15

Note: |x| is the absolute value of x

*/
