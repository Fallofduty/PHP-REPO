<?php
function hello(){
    echo "hello world";
}
$current_user = "mike";
hello(); // hello world

function is_mike(){
    global $current_user; // convert local variable to global
    if($current_user == "mike"){
        echo "it is mike";
    }else{
        echo "not mike";
    }

}
is_mike() // it is mike
?>