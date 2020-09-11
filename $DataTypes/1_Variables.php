<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
   $name = "nafis"; // string
   $number = 100; // number
   $number_2 = 100.5; //float  takes more memory though 

   //must start with lowercase
   // for two letter words use 
   $firstName = "nafu";
   $first_name = "nafu"; 
   // this is okay too 

   //string concat 
   echo $name . $number; // nafis100
   //. is used to add stuff

   $name = "<h1>hello <h1>";
   // this will print hello in big format
   echo($name);
  
   ?>

</body>
</html>