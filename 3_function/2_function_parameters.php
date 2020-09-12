<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function greeting($message){ // has parameters
        // parameters are function based.  
        echo $message;
    }
    greeting("hello student"); //hello student is the argument 

    function sum($num1,$num2){ // has two values. 
        echo $num1 + $num2;
    } 
    
    echo "<br>";
    sum(1,2) //3
    ?>
</body>
</html>  