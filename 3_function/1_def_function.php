<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    
     function sayHello(){
         echo "hello world";
     }

     

     sayHello(); // this will call the function
     echo "<br>";
     /**function inside function */
     function calculate(){
         echo 4+5;
         sayHello();
     }
     calculate()
    ?>
</body>
</html>