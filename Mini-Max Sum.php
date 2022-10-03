<?php

/*
 * Complete the 'miniMaxSum' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

// https://www.hackerrank.com/challenges/one-month-preparation-kit-mini-max-sum

function miniMaxSum($arr) {
  // Write your code here
  
  $arr2[0] = unsetK($arr, 0);
  $arr2[1] = unsetK($arr, 1);
  $arr2[2] = unsetK($arr, 2);
  $arr2[3] = unsetK($arr, 3);
  $arr2[4] = unsetK($arr, 4);
  
  // print_r($arr);
  // print_r($arr2);
  echo min($arr2). " ".max($arr2);

}

function unsetK ($arr, $k) {
  $v = $arr[$k];
  // echo "\n". $k.", "; print($v);
  unset($arr[$k]);
  $sum = array_sum($arr);
  // echo "\nsum ".$sum;
  $arr[$k] = $v;
  ksort($arr);
  return $sum;
}

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

miniMaxSum($arr);

/*************************************************************
 Given five positive integers, find the minimum and maximum values that can be calculated by summing exactly four of the five integers. Then print the respective minimum and maximum values as a single line of two space-separated long integers.

Example
The minimum sum is and the maximum sum is

. The function prints

16 24

Function Description

Complete the miniMaxSum function in the editor below.

miniMaxSum has the following parameter(s):

    arr: an array of 

    integers

Print

Print two space-separated integers on one line: the minimum sum and the maximum sum of
of

elements.

Input Format

A single line of five space-separated integers.

Constraints

Output Format

Print two space-separated long integers denoting the respective minimum and maximum values that can be calculated by summing exactly four of the five integers. (The output can be greater than a 32 bit integer.)

Sample Input

1 2 3 4 5

Sample Output

10 14

Explanation

The numbers are
, , , , and

. Calculate the following sums using four of the five integers:

    Sum everything except 

, the sum is
.
Sum everything except
, the sum is
.
Sum everything except
, the sum is
.
Sum everything except
, the sum is
.
Sum everything except
, the sum is

    .

Hints: Beware of integer overflow! Use 64-bit Integer.

*/
