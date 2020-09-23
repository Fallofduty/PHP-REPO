<?php
$greet = function(){
echo "hello there";
};

$greet(); // hello there
$name = "mike";
$greet = function() use ($name){ // this lets use of the variable $name
    echo "hello there $name";
    };
    
$greet(); // hello there mike    
?>