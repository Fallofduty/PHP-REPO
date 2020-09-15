<?php



$exercise1 = 'Display "Hello World!"';
$exercise2 = 'Convert Pounds to Kilograms';
$exercise3 = 'Convert Kilograms to Pounds';
$exercise4 = 'Convert Miles to Kilometers';
$exercise5 = 'Convert Kilometers to Miles';
$exercise6 = 'Month long string of the day';
$exercise7 = 'String of the day with levels';

$day = date("N"); // stands for monday starts from monday 


if($day==1){ // monday 
    echo $exercise1; 
}elseif($day==2){ //tuesday
    echo $exercise2;
    // i started the code on tuesday 
       // so it will show the  'Convert Pounds to Kilograms';
}elseif($day==3){ // wednesday
    echo $exercise3; 
}elseif($day==4){ // thursday
    echo $exercise4;
}elseif($day==5){//friday
    echo $exercise5;    
}elseif($day==6){//saturday
    echo $exercise6;
}elseif($day==7){//sunday 
    echo $exercise7;
}



?>

