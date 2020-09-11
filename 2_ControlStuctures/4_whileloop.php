<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
   //loops allow codes to be repeated over and over again
   $counter = 0;
   while($counter<10){
       //() statment is true untill then it will go 
       // when false it will not work. 
       // often have counter so loop is not infinite 
       echo "hello repeated ". $counter . "times"."<br>";
       $counter++;
   }


   ?>
</body>
</html>