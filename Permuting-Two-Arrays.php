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


/***********************************************************
 * 
 There are two -element arrays of integers, and . Permute them into some and such that the relation holds for all where

.

There will be
queries consisting of , , and . For each query, return YES if some permutation ,

satisfying the relation exists. Otherwise, return NO.

Example


A valid is and : and

. Return YES.

Function Description

Complete the twoArrays function in the editor below. It should return a string, either YES or NO.

twoArrays has the following parameter(s):

    int k: an integer
    int A[n]: an array of integers
    int B[n]: an array of integers

Returns
- string: either YES or NO

Input Format

The first line contains an integer

, the number of queries.

The next
sets of

lines are as follows:

    The first line contains two space-separated integers 

and , the size of both arrays and
, and the relation variable.
The second line contains
space-separated integers
.
The third line contains
space-separated integers

    .

Constraints

Sample Input

STDIN       Function
-----       --------
2           q = 2
3 10        A[] and B[] size n = 3, k = 10
2 1 3       A = [2, 1, 3]
7 8 9       B = [7, 8, 9]
4 5         A[] and B[] size n = 4, k = 5
1 2 2 1     A = [1, 2, 2, 1]
3 3 3 4     B = [3, 3, 3, 4]

Sample Output

YES
NO

Explanation

There are two queries:

    Permute these into 

and

so that the following statements are true:

, , and . To permute and into a valid and , there must be at least three numbers in that are greater than . 

*/
