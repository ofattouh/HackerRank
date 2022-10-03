<?php

/*
 * Complete the 'plusMinus' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

// https://www.hackerrank.com/challenges/one-month-preparation-kit-plus-minus

function plusMinus($arr) {
  $countZero = 0;
  $countPositive = 0;
  $countNegative = 0;
  $countElements = count($arr);
  // print_r($arr);
  
  // Write your code here
  foreach ($arr as $k => $v){
    // echo $k.", "; print($v);
    
    if ($v == 0) {
      $countZero +=1;
    }
    
    if ($v > 0) {
      $countPositive +=1;
    }
    
    if ($v < 0) {
      $countNegative +=1;
    }
  }
  
  /*
  echo "countZero=". $countZero;
  echo "\ncountPositive=". $countPositive;
  echo "\ncountNegative=". $countNegative;
  echo "\ncountElements=". $countElements;
  */
  
  echo number_format($countPositive/$countElements,6,'.',' ');
  echo "\n". number_format($countNegative/$countElements,6,'.',' ');
  echo "\n". number_format($countZero/$countElements,6,'.',' '); 
  
}

$n = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

//$arr = [1,-1,0];
plusMinus($arr);


/***********************************************************
 
Given an array of integers, calculate the ratios of its elements that are positive, negative, and zero. Print the decimal value of each fraction on a new line with

places after the decimal.

Note: This challenge introduces precision problems. The test cases are scaled to six decimal places, though answers with absolute error of up to

are acceptable.

Example
There are elements, two positive, two negative and one zero. Their ratios are , and

. Results are printed as:

0.400000
0.400000
0.200000

Function Description

Complete the plusMinus function in the editor below.

plusMinus has the following parameter(s):

    int arr[n]: an array of integers

Print
Print the ratios of positive, negative and zero values in the array. Each value should be printed on a separate line with

digits after the decimal. The function should not return a value.

Input Format

The first line contains an integer,
, the size of the array.
The second line contains space-separated integers that describe

.

Constraints


Output Format

Print the following
lines, each to

decimals:

    proportion of positive values
    proportion of negative values
    proportion of zeros

Sample Input

STDIN           Function
-----           --------
6               arr[] size n = 6
-4 3 -9 0 4 1   arr = [-4, 3, -9, 0, 4, 1]

Sample Output

0.500000
0.333333
0.166667

Explanation

There are
positive numbers, negative numbers, and zero in the array.
The proportions of occurrence are positive: , negative: and zeros: .

*/