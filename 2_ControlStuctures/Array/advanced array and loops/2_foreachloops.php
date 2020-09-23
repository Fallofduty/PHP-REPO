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
foreach($list as $item ){
    echo $item['title']."\n";
    /*
    $list is array name that us a start 
    $item["title'] will be the array and ['title] is the key

// all the task list has been printed. 
Laundry
Dishes
Dust
Vacuum
Make Dinner
Clean Out Fridge
*/
    
}

echo "<table>"; // this is the start of the table 
echo "<thead>"; // where all the title will go 
echo "<tr>";
echo "<th>title</th>";
echo "<th>priorty</th>";
echo "<th>due date</th>";
echo "<th>completed</th>";
echo "<tr>";
echo "</thead>"; // all the title goes here 

foreach($list as $item ){
    echo '<tbody>';
    echo '<tr>';
    echo "<td>".$item["title"]."</td>\n";
    echo "<td>".$item["priority"]."</td>\n";
    echo "<td>".$item["due"]."</td>\n";
    if($item["complete"]){
        echo "<td>"."yes"."</td>\n";
    }
    else{
        echo "<td>"." no"."</td>\n";
    }

    echo '</tr>';
    echo '</tbody>';
  
    
}
echo "</table>"; // end of table 
?>