<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$numberList = array(1,3,4,5,6,"<h1>nafis</h1>"); 
// define it as as array() function 
// 
$numberList = [1,2,3,4,"<h1>nafis</h1>"]; // other ways to define an array 
echo $numberList[0]; //1
echo "<br>";
echo $numberList[1]; // 2
echo "<br>";
echo $numberList[2]; // 3
echo "<br>";
echo $numberList[3]; // 4
echo "<br>";
echo $numberList[4]; // nafis in h1 format
echo "<br>";

print_r($numberList); // this prints the stcutre of the array
/*

Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] =>
nafis
)
[0] means index => is points to value which is 1 
*/


?>
    
</body>
</html>