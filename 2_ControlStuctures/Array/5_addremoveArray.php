<?php
include "4_indexarray.php";
$learn[] = "build something awesome";
var_dump($learn);
/* 
loopconditononals+array+looparray(4) {
  [0]=>
  string(13) "conditononals"
  [1]=>
  string(5) "array"
  [2]=>
  string(4) "loop"
  [3]=>
  string(23) "build something awesome"
  array learn has 4 element
}
*/
//array push
  // puts items in the begining of the array

array_push($learn,"variables"); // variable will show up at the end 
// must have $learn and the amounrt that needed tob e there 
var_dump($learn);  

/*
array(5) {
  [0]=>
  string(13) "conditononals"
  [1]=>
  string(5) "array"
  [2]=>
  string(4) "loop"
  [3]=>
  string(23) "build something awesome"
  [4]=>
  string(9) "variables" 
}
*/
array_push($learn,"function","form");
var_dump($learn); 
/*
array(7) {
  [0]=>
  string(13) "conditononals"
  [1]=>
  string(5) "array"
  [2]=>
  string(4) "loop"
  [3]=>
  string(23) "build something awesome"
  [4]=>
  string(9) "variables"
  [5]=>
  string(8) "function"
  [6]=>
  string(4) "form"

  // variable and form showed up at the end 
}
*/
$test = "hello";

array_push($learn,$test);

var_dump($learn);
/*
array(8) {
  [0]=>
  string(13) "conditononals"
  [1]=>
  string(5) "array"
  [2]=>
  string(4) "loop"
  [3]=>
  string(23) "build something awesome"
  [4]=>
  string(9) "variables"
  [5]=>
  string(8) "function"
  [6]=>
  string(4) "form"
  [7]=>
  string(5) "hello"
}
*/

array_unshift($learn,"PHP");

var_dump($learn);
/*
array(9) {
  [0]=>
  string(3) "PHP"
  [1]=>
  string(13) "conditononals"
  [2]=>
  string(5) "array"
  [3]=>
  string(4) "loop"
  [4]=>
  string(23) "build something awesome"
  [5]=>
  string(9) "variables"
  [6]=>
  string(8) "function"
  [7]=>
  string(4) "form"
  [8]=>
  string(5) "hello"
}
php showed up at index 1 
*/
?>