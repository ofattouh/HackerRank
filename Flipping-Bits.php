<?php

/*
 * Complete the 'flippingBits' function below.
 *
 * The function is expected to return a LONG_INTEGER.
 * The function accepts LONG_INTEGER n as parameter
 */

// https://www.hackerrank.com/challenges/one-month-preparation-kit-flipping-bits
// https://www.php.net/manual/en/function.sprintf.php

function flippingBits($n) {
    // Write your code here
    
    $d = array();
    $dec = "";
    $m = explode("\n", $n);
    
    // convert decimal input to binary and save it as array
    foreach ($m as $k => $v) {
      $b = sprintf( "%032b", $v);
      $bin = str_split($b);
    }
    
    // flip all binary bits
    foreach ($bin as $k => $v) {
      if ($v == 1) {
        $d[$n][$k] = 0;
      } 
      
      if ($v == 0) {
        $d[$n][$k] = 1;
      }
    }
    
    // convert flipped binary number back to decimal string
    foreach ($d as $k => $v) {
      $dec .= bindec(implode($v));
    }
    
    // print_r($dec);
     
    return $dec;

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$q = intval(trim(fgets(STDIN)));

for ($q_itr = 0; $q_itr < $q; $q_itr++) {
    $n = intval(trim(fgets(STDIN)));

    $result = flippingBits($n);

    fwrite($fptr, $result . "\n");
}

fclose($fptr);

/***************************************************
 You will be given a list of 32 bit unsigned integers. Flip all the bits ( and

) and return the result as an unsigned integer.

Example

. We're working with 32 bits, so:


Return

.

Function Description

Complete the flippingBits function in the editor below.

flippingBits has the following parameter(s):

    int n: an integer

Returns

    int: the unsigned decimal integer result

Input Format

The first line of the input contains
, the number of queries.
Each of the next lines contain an integer,

, to process.

Constraints


Sample Input

3 
2147483647 
1 
0

Sample Output

2147483648 
4294967294 
4294967295

Explanation

Take 1 for example, as unsigned 32-bits is 00000000000000000000000000000001 and doing the flipping we get 11111111111111111111111111111110 which in turn is 4294967294.

*/
