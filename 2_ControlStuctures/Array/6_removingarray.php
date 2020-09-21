<?php
include "4_indexarray.php";
include "5_addremoveArray.php";

var_dump($learn);

// removoming first element 
$firstElement = array_shift($learn);
echo $firstElement; // PHP has been removed found here now 

// last element element
$lastElement=array_pop($learn);
echo $lastElement;  //hello

// unset multiple 
unset($learn[1],$learn[2]);

var_dump($learn);

/*
PHPhelloarray(5) {
  [0]=>
  string(13) "conditononals"
  [3]=>
  string(23) "build something awesome"
  [4]=>
  string(9) "variables"
  [5]=>
  string(8) "function"
  [6]=>
  string(4) "form"
  1 and 2 is gone from there but they key has not changed
}
*/

?>