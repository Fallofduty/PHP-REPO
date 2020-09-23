<?php
function hello($name){
    echo "hello, $name";
}
hello("nafis"); // hello, nafis

function hello2($names){
if(is_array($names)){ // check if its an array or not
    foreach($names as $name){
        echo "hello, $name\n";
    }
}
else{
    echo "hello, $names"."\n";
}
}

hello2(["nafis","motu"])
/*
hello, nafis
hello, motu
*/
?>