<?php
$phrase = "we only hit what we aim for";
$len=strlen($phrase); 
echo $len; // 27 characthers lengt

//substr
$result=substr($phrase,0,2);
echo $result; // we 0 is the starting 2 is length;

//strpos
$storpos=strpos($phrase,'w');

echo $storpos; // 0  w was found at 0;




?>