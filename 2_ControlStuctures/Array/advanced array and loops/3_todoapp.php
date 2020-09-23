<?php

$list = array();
$list[] = array(
    'title' => 'Laundry',
    'priority' => 2,
    'due' => '07/11/2016',
    'day' => 0,
    'repeat' => true,
    'complete' => false,
);
$list[] = array(
    'title' => 'Dishes',
    'priority' => 2,
    'due' => null,
    'day' => 0,
    'repeat' => true,
    'complete' => false,
);
$list[] = array(
    'title' => 'Dust',
    'priority' => 3,
    'due' => null,
    'day' => 5,
    'repeat' => true,
    'complete' => false,
);
$list[] = array(
    'title' => 'Vacuum',
    'priority' => 1,
    'due' => '07/15/2016',
    'day' => 1,
    'repeat' => true,
    'complete' => false,
);
$list[] = array(
    'title' => 'Make Dinner',
    'priority' => 1,
    'due' => null,
    'day' => 0,
    'repeat' => true,
    'complete' => false,
);
$list[] = array(
    'title' => 'Clean Out Fridge',
    'priority' => 2,
    'due' => '07/30/2016',
    'day' => 0,
    'repeat' => true,
    'complete' => true,
);

$filter = [];
$status = false;
foreach ($list as $originalkey => $item) {
    //first loop through $list
    //take $key 
    //take $item
 if(!$item["complete"]){
     $filter[$originalkey]=$item["priority"]; 
     // check which of the array $item is true
     // if true pass that index on $filter;
     // key has been set based on priority;
     
    
 }
 
}
asort($filter);

/*
[0] => 5 is the value here 
*/
echo "<table>"; // this is the start of the table 
echo "<thead>"; // where all the title will go 
echo "<tr>";
echo "<th>title</th>";
echo "<th>priorty</th>";
echo "<th>due date</th>";
echo "<th>completed</th>";
echo "<tr>";
echo "</thead>"; // all the title goes here 

foreach($filter as $id=>$value ){
    echo '<tbody>';
    echo '<tr>';
    echo "<td>".$list[$id]["title"]."</td>\n";
    // id is the index // then go to title
    echo "<td>".$list[$id]["priority"]."</td>\n";
    echo "<td>".$list[$id]["due"]."</td>\n";
    echo "<td>"."no"."</td>\n";
   
    
    

    echo '</tr>';
    echo '</tbody>';
  
    
}
echo "</table>"; // end of table 


?>

