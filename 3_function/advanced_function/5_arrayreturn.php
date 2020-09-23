<?php
function add_up($a, $b){
    $arr = array(
      $a,
      $b,
      $a + $b
    );
    return $arr;
  }
  
  $value = add_up(2, 4);
  
  $arr=[$value];
  print_r($arr);
  /* 
[0] => 2
            [1] => 4
            [2] => 6
  */

?>