<?php

/*
 * Complete the 'matchingStrings' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts following parameters:
 *  1. STRING_ARRAY strings
 *  2. STRING_ARRAY queries
 */

// https://www.hackerrank.com/challenges/one-month-preparation-kit-sparse-arrays

function matchingStrings($strings, $queries) {
  // Write your code here
  
  foreach ($queries as $k => $v) {
    $qitem[] = count(array_keys($strings, $v));
  }
  
  return $qitem;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$strings_count = intval(trim(fgets(STDIN)));

$strings = array();

for ($i = 0; $i < $strings_count; $i++) {
    $strings_item = rtrim(fgets(STDIN), "\r\n");
    $strings[] = $strings_item;
}

$queries_count = intval(trim(fgets(STDIN)));

$queries = array();

for ($i = 0; $i < $queries_count; $i++) {
    $queries_item = rtrim(fgets(STDIN), "\r\n");
    $queries[] = $queries_item;
}

$res = matchingStrings($strings, $queries);

fwrite($fptr, implode("\n", $res) . "\n");

fclose($fptr);


/**********************************
 * 
 There is a collection of input strings and a collection of query strings. For each query string, determine how many times it occurs in the list of input strings. Return an array of the results.

Example

There are instances of ', of '' and of ''. For each query, add an element to the return array,

.

Function Description

Complete the function matchingStrings in the editor below. The function must return an array of integers representing the frequency of occurrence of each query string in strings.

matchingStrings has the following parameters:

    string strings[n] - an array of strings to search
    string queries[q] - an array of query strings

Returns

    int[q]: an array of results for each query

Input Format

The first line contains and integer
, the size of .
Each of the next lines contains a string .
The next line contains , the size of .
Each of the next lines contains a string

.

Constraints



.

Sample Input 1
CopyDownload

4
aba
baba
aba
xzxb
3
aba
xzxb
ab

Sample Output 1

2
1
0

Sample Input 2
CopyDownload

3
def
de
fgh
3
de
lmn
fgh

Sample Output 2

1
0
1

Sample Input 3
CopyDownload

13
abcde
sdaklfj
asdjf
na
basdn
sdaklfj
asdjf
na
asdjf
na
basdn
sdaklfj
asdjf
5
abcde
sdaklfj
asdjf
na
basdn

Sample Output 3

1
3
4
3
2
  
 */
