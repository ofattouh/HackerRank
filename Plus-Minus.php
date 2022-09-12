<?php

/*
 * Complete the 'plusMinus' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

// https://www.hackerrank.com/interview/preparation-kits/one-month-preparation-kit

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

?>