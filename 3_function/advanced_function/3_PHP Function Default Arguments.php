<?php
function greet($name,$time_of_day="morning"){
    // default value is given morning 
echo "hello $name $time_of_day ";
}

greet("nafis"); // hello nafis morning 

greet("nafis","afternoon") // hello nafis afternoon 


?>