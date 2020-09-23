<?php
function hello(){
    return "hello, world";
}

$greetings = hello();
echo $greetings; // hello, world

function hello2($name){
    if($name == "nafis"){
       return "hello $name";
    }else{
        return "hello stranger $name";
    }

}
echo hello2("nafis"); //hello nafis
echo hello2("motu"); // hello stranger motu

function addup($a,$b){
    return $a+$b;
}
echo addup(1,2); // 3
?>