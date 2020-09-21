<?php
$learn = array("conditononals","array","loop");

var_dump($learn);

/*
array(3) {
  [0]=>
  string(13) "conditononals"
  [1]=>
  string(5) "array"
  [2]=>
  string(4) "loop"

}

*/


echo implode("\n",$learn);
/*
arrayconditononals
array
loop
this prints the array in the list like that 
takes any html string or even plus too 
*/
echo implode("+",$learn); // loopconditononals+array+loop

?>