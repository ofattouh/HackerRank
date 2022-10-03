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

/*******************************************************
 
 Two children, Lily and Ron, want to share a chocolate bar. Each of the squares has an integer on it.

Lily decides to share a contiguous segment of the bar selected such that:

    The length of the segment matches Ron's birth month, and,
    The sum of the integers on the squares is equal to his birth day.

Determine how many ways she can divide the chocolate.

Example


Lily wants to find segments summing to Ron's birth day, with a length equalling his birth month, . In this case, there are two segments meeting her criteria: and

.

Function Description

Complete the birthday function in the editor below.

birthday has the following parameter(s):

    int s[n]: the numbers on each of the squares of chocolate
    int d: Ron's birth day
    int m: Ron's birth month

Returns

    int: the number of ways the bar can be divided

Input Format

The first line contains an integer
, the number of squares in the chocolate bar.
The second line contains space-separated integers , the numbers on the chocolate squares where .
The third line contains two space-separated integers, and

, Ron's birth day and his birth month.

Constraints

, where (
)

*/
