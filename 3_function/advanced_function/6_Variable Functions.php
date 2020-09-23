<?php
function answer(){
    return 42;
}
function add_up($a,$b){
    return $a+$b;
}

$func ="answer"; // pass the function name on php
$func();
echo $func();

$func ="add_up";
$func(1,2); // 3  // passed parameter 
echo $func(1,2); //3 

?>