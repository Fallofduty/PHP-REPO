<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      echo "<h1>comparison  operator </h1>";
      echo "equal ==";
      echo "<br>";
      echo " identical ===";
      echo "<br>";
      echo " not equal !=";
      echo "<br>";
      echo "bot identical !==";
      echo "<br>";

     echo "<h1>Logical operator </h1>";
     echo "and &&";
     echo "<br>";
     echo "or ||";
     echo "<br>";
     echo "! not";
     echo "<br>";

     // identical and and not ideitcal 

     if(4=="4"){
       echo "true both are 4";
       // in this case it does not if 4 is a string or not cause 4 and "4" is not the same
     }
     echo "<br>";

     if(4==="4"){
        echo "true both are 4";
        // this will never be excuted cause 4 is a number and "4 is a string
     }

     if(4!="4"){
         echo "it is true"; // this wont execute both 4 and "4" are seen as same so wont work. 
     }

     if(4!=="4"){
        echo "it is true"; // this will execute cause 4 and "4" is not the same; 
    }


      
    ?>
</body>
</html>