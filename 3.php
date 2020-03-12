<?php
$arr1 = [1,2,3,4,5];

echo "<pre>";
print_r($arr1);

function arrayMap($arr1, $fun) 
{
  $arr2 = [];
  for($i=0; $i < sizeof($arr1); $i++) {
    $arr2[$i] = $fun($arr1[$i]);
  }
  return $arr2;
}

$b = function($item){
      return $item * 10;
};

$result = arrayMap($arr1, $b);

echo "<pre>";
print_r($result);
