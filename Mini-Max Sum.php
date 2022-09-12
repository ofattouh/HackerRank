<?php

/*
 * Complete the 'miniMaxSum' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

// https://www.hackerrank.com/interview/preparation-kits/one-month-preparation-kit

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

?>