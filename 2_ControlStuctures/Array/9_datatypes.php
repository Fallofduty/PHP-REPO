<?php

include "8_assosiativearryas.php";

$icecream["alena"]="vaniila"; // must define a a new key to define it or it will be replaced. 

var_dump($icecream);


/**
  ["alena"]=>
  string(7) "vaniila" // alena value has been replaced here 
  ["treasure"]=>
  string(7) "cholate"
  ["dave"]=>
  string(12) "cookiescream"
  ["riala"]=>
  string(10) "strawberry"

 * 
 * 
 */
$icecream[] = "vanilla";
$icecream[] = "vanilla";


var_dump($icecream);

/**
 * array(6) {
  ["alena"]=>
  string(7) "vaniila"
  ["treasure"]=>
  string(7) "cholate"
  ["dave"]=>
  string(12) "cookiescream"
  ["riala"]=>
  string(10) "strawberry"
  [0]=>
  string(7) "vanilla" // two vannila showed up with index 0 and 1 
                        // cause none of the other were taken it starts at 0 then 1;
  [1]=>
  string(7) "vanilla"
}
 * /

?>
?>
