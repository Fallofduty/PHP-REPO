<?php
  
$task1 = [
      'title' => 'laundry',
      'priority' =>2,
      'due' =>'',
      'complete' => true,



];
$task2 = [
      'title' => 'clean out fridge',
      'priority' =>3,
      'due' =>'7/30/2016',
      'complete' => false,



];

$list =[$task1,$task2]; // putting both list to $task.

var_dump($list);

/*

array(2) {
  [0]=>
  array(4) {
    ["title"]=>
    string(7) "laundry"
    ["priority"]=>
    int(2)
    ["due"]=>
    string(0) ""
    ["complete"]=>
    bool(true)
  }
  [1]=>
  array(4) {
    ["title"]=>
    string(16) "clean out fridge"
    ["priority"]=>
    int(3)
    ["due"]=>
    string(9) "7/30/2016"
    ["complete"]=>
    bool(false)
  }
}
// has two elelemnts here 

*/


// acessing multu dimesional array with

echo $list[0]["title"]; // laundry
// go to index and then the key

echo $list[1]["title"]; // clean out fridge


$list[] = [
    'title' => 'coding',
    'priority' =>2,
    'due' =>'',
    'complete' => true,
    // to make sure its 2 dimenstional add [] beside list;



];
$list[] = [
    'title' => 'working out',
    'priority' =>3,
    'due' =>'7/30/2016',
    'complete' => false,
];

var_dump($list);

/*
array(4) {
    ["title"]=>
    string(16) "clean out fridge"
    ["priority"]=>
    int(3)
    ["due"]=>
    string(9) "7/30/2016"
    ["complete"]=>
    bool(false)
  }
  [2]=>
  array(4) {
    ["title"]=>
    string(6) "coding"
    ["priority"]=>
    int(2)
    ["due"]=>
    string(0) ""
    ["complete"]=>
    bool(true)
  }
  [3]=>
  array(4) {
    ["title"]=>
    string(11) "working out"
    ["priority"]=>
    int(3)
    ["due"]=>
    string(9) "7/30/2016"
    ["complete"]=>
    bool(false)
  }

  2 more elelemetns has been added 
*/



?>