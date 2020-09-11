<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $number = 34;
     switch($number){
         case 34:{
             echo "it is 34";
         break; // break is a must or the code will keep contiuing. 
         // thus output can look like this 
         // 
         }
         case 35:{
            echo "it is 35";
        break;
        }
        default:
        echo "no value found";
    break; // not necessary 
     }
    ?>
</body>
</html>