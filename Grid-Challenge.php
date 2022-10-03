<?php

/*
 * Complete the 'gridChallenge' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts STRING_ARRAY grid as parameter.
 */

// https://www.hackerrank.com/challenges/one-week-preparation-kit-grid-challenge

function gridChallenge($grid) {
  // Write your code here
  
  $grid_cols = array();
  $number_columns_grid = 0;
  $isSortable = array();
  $grid_rows_sorted = array();
  $grid_cols_sorted = array();
  
  // Sort grid rows first
  foreach($grid as $k => $grid_row) {
    $grid_row_str = str_split($grid_row);
    sort($grid_row_str);
    $grid_rows_sorted [$k] = $grid_row_str;
    $number_columns_grid = sizeof($grid_row_str);
  }
    
  // Get the new columns order after sorting rows
  for ($i=0; $i<$number_columns_grid; $i++) {
    for ($j=0; $j<sizeof($grid_rows_sorted); $j++) {
      $grid_cols[$i][$j] = $grid_rows_sorted[$j][$i];
    }
  }
  
  // Check if columns can be sorted as well
  foreach($grid_cols as $k => $grid_col) {
    $grid_cols_sorted = $grid_col;
    sort($grid_cols_sorted);
    $diff_cols = ($grid_col === $grid_cols_sorted);

    if ($diff_cols) {
      $isSortable[$k] = 1;
    }
    else {
      $isSortable[$k] = 0;
    } 
  }

  // Count each not/sortable values
  $countisSortable = array_count_values($isSortable);
  
  // number of columns in original grid should match number of sortable columns after sorting the grid rows
  if (isset($countisSortable) &&
    $countisSortable[1] === sizeof($isSortable)) {
    return "YES";
  }
  else {
    return "NO";
  }
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$t = intval(trim(fgets(STDIN)));

for ($t_itr = 0; $t_itr < $t; $t_itr++) {
    $n = intval(trim(fgets(STDIN)));

    $grid = array();

    for ($i = 0; $i < $n; $i++) {
        $grid_item = rtrim(fgets(STDIN), "\r\n");
        $grid[] = $grid_item;
    }

    $result = gridChallenge($grid);

    fwrite($fptr, $result . "\n");
}

fclose($fptr);

/*************************************************************************
 * 
 Given a square grid of characters in the range ascii[a-z], 
 rearrange elements of each row alphabetically, ascending. 
 Determine if the columns are also in ascending alphabetical order, top to bottom. 
 Return YES if they are or NO if they are not.

Example

The grid is illustrated below.

a b c
a d e
e f g

The rows are already in alphabetical order. The columns a a e, b d f and c e g are also in alphabetical order, so the answer would be YES. Only elements within the same row can be rearranged. They cannot be moved to a different row.

Function Description

Complete the gridChallenge function in the editor below.

gridChallenge has the following parameter(s):

    string grid[n]: an array of strings

Returns

    string: either YES or NO

Input Format

The first line contains

, the number of testcases.

Each of the next
sets of lines are described as follows:
- The first line contains , the number of rows and columns in the grid.
- The next lines contains a string of length

Constraints

Each string consists of lowercase letters in the range ascii[a-z]

Output Format

For each test case, on a separate line print YES if it is possible to rearrange the grid alphabetically ascending in both its rows and columns, or NO otherwise.

Sample Input

STDIN   Function
-----   --------
1       t = 1
5       n = 5
ebacd   grid = ['ebacd', 'fghij', 'olmkn', 'trpqs', 'xywuv']
fghij
olmkn
trpqs
xywuv

Sample Output

YES

Explanation

The
x grid in the

test case can be reordered to

abcde
fghij
klmno
pqrst
uvwxy

This fulfills the condition since the rows 1, 2, ..., 5 and the columns 1, 2, ..., 5 are 
all alphabetically sorted. 

*/
