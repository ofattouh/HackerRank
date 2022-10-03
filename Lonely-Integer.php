<?php

/*
 * Complete the 'lonelyinteger' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER_ARRAY a as parameter.
 */

// https://www.hackerrank.com/challenges/one-month-preparation-kit-lonely-integer

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

/**********************
 
 Given an array of integers, where all elements but one occur twice, find the unique element.

Example
The unique element is

.

Function Description

Complete the lonelyinteger function in the editor below.

lonelyinteger has the following parameter(s):

    int a[n]: an array of integers

Returns

    int: the element that occurs only once

Input Format

The first line contains a single integer,
, the number of integers in the array.
The second line contains space-separated integers that describe the values in

.

Constraints

It is guaranteed that
is an odd number and that there is one unique element.
, where .

 */
