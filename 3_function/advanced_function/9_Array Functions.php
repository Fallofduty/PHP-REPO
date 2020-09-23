<?php
$names =[
    "mike"=>"frog",
    "chris"=>"teacher",
    "nafis"=>"gamer"
];
foreach(array_keys($names) as $name){
    echo "$name\n";
    /* only gets keys array_keys
    mike
chris
nafis

    */
}

//arraywalk
function print_info($value,$key){ // $value must be pass first
    echo "$key is a $value\n";
}
array_walk($names,"print_info");
// pass in names array and then function name in "quoutation";

/* 
mike is a frog
chris is a teacher
nafis is a gamer

*/
?>