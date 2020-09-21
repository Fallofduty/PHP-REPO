<?php

$icecream = array(
    "alena"=> "blackcherry",
    "treasure"=> "cholate",
    "dave"=> "cookiescream",
    "riala"=> "strawberry",
    // to define it use it use key => follow vartiable.

);

// other ways to define it use

$iceCream = [
    'Alena' => 'Black Cherry', 
    'Dave' => 'Cookies and Cream',
    'Treasure' => 'Chocolate',
    'Rialla' => 'Strawberry'
];

var_dump($icecream);
/*
array(4) {
  ["alena"]=>
  string(11) "blackcherry"
  ["treasure"]=>
  string(7) "cholate"
  ["dave"]=>
  string(12) "cookiescream"
  ["riala"]=>
  string(10) "strawberry"

}
*/
echo $icecream["dave"]; //cookiescream
 

?>