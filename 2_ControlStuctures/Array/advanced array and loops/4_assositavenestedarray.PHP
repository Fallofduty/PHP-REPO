<?php
$list = [
  "nafis"=> [
    'title' => 'Laundry',
    'priority' => 2,
    'due' => '07/11/2016',
    'day' => 0,
    'repeat' => true,
    'complete' => false,
  ]

   ];


foreach($list as $key =>$value ){
     echo $key."\n"; // key will print the assosiate array key.
     // nafis is the key here 

}

foreach($list as $key =>$value ){
  echo $value["title"]."\n";
  echo $value["priority"]."\n";
  echo $value["due"]."\n";
  echo $value["day"]."\n";
  echo $value["repeat"]."\n";
  echo $value["complete"]."\n";
  /*
  theese are the following output 
  for the value since values inside array
  are nested has specific key value
  so first have to acess via value array
  value works as a array["key"] then pass the key
  this value is they array title,priorirty,due,day,repeat,complete
  both works as a key

  $value is the array 
  nafis
Laundry
2
07/11/2016
0
1
  */
  

}


?>