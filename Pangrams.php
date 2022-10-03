<?php

/*
 * Complete the 'pangrams' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts STRING s as parameter.
 */

// https://www.hackerrank.com/challenges/one-month-preparation-kit-pangrams

function pangrams($s) {
    // Write your code here
    
    $output = '';
    $alphabets = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");

    $s = strtolower($s);
    $s = str_replace(" ", "", $s);
    $s_array = str_split($s);
    
    foreach($s_array as $k => $v) {
      if (in_array($v, $alphabets)) {
        $found[$v] = $v;
      }
    }
    
    if (sizeof($found) === sizeof($alphabets))  {
      $output = "pangram";
    }
    else {
      $output = "not pangram";
    }

    return $output;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$s = rtrim(fgets(STDIN), "\r\n");

$result = pangrams($s);

fwrite($fptr, $result . "\n");

fclose($fptr);

/***************************************************************
 
 A pangram is a string that contains every letter of the alphabet. Given a sentence determine whether it is a pangram in the English alphabet. Ignore case. Return either pangram or not pangram as appropriate.

Example

The string contains all letters in the English alphabet, so return pangram.

Function Description

Complete the function pangrams in the editor below. It should return the string pangram if the input string is a pangram. Otherwise, it should return not pangram.

pangrams has the following parameter(s):

    string s: a string to test

Returns

    string: either pangram or not pangram

Input Format

A single line with string

.

Constraints


Each character of ,

Sample Input

Sample Input 0

We promptly judged antique ivory buckles for the next prize

Sample Output 0

pangram

Sample Explanation 0

All of the letters of the alphabet are present in the string.

Sample Input 1

We promptly judged antique ivory buckles for the prize

Sample Output 1

not pangram

Sample Explanation 0

The string lacks an x. 

*/
