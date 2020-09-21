<?php

$learn = array("conditononals","array","loop");

asort($learn);

var_dump($learn); 

/*

array(3) {
  [1]=>
  string(5) "array"
  [0]=>
  string(13) "conditononals"
  [2]=>
  string(4) "loop"
}
// array is sorted but tjey keys and values have not been changed. 

*/

sort($learn);

var_dump($learn);

/*
array(3) {
  [0]=>
  string(5) "array"
  [1]=>
  string(13) "conditononals"
  [2]=>
  string(4) "loop"
}
all the items has been sorted index has been chagned too 
*/
rsort($learn);
var_dump($learn); 

/*
array(3) {
  [0]=>
  string(4) "loop"
  [1]=>
  string(13) "conditononals"
  [2]=>
  string(5) "array"
}
has been sorted on reverse order  

*/

// sorting by array keys and
$iceCream = [
    'Dave' => 'Cookies and Cream',
    'Alena' => 'Black Cherry', 
    
    'Treasure' => 'Chocolate',
    'Rialla' => 'Strawberry'
];
ksort($iceCream); // sort based on keys 

var_dump($iceCream);

/*
array(4) {
  ["Alena"]=>
  string(12) "Black Cherry"
  ["Dave"]=>
  string(17) "Cookies and Cream"
  ["Rialla"]=>
  string(10) "Strawberry"
  ["Treasure"]=>
  string(9) "Chocolate"
}
list has been sorted


*/

asort($iceCream);
var_dump($iceCream)

/*

array(4) {
  ["Alena"]=>
  string(12) "Black Cherry"
  ["Treasure"]=>
  string(9) "Chocolate"
  ["Dave"]=>
  string(17) "Cookies and Cream"
  ["Rialla"]=>
  string(10) "Strawberry"
}
sorting has been done  based on values in order 

*/
?>