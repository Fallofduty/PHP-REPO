<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     
    function addNumbers($num1,$num2){
     
        return $num1+$num2;
    }

  $result =   addNumbers(11,22); // reutrn must be stored in result;
  echo $result; //33 
  echo "<br>";

  $result = addNumbers(11,$result); // 44

  echo $result;


    ?>
</body>
</html>