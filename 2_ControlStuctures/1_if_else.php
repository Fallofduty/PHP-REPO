<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

if(3<10){ // must execute true
 echo "3 is less than 10"; // this is true so it will be executed. 
}

else if(3<10){
    echo "3 is not bigger than 10"; // since the first one is true this will never be excuted 
}
else{ // only time this will be excuted when else becomes false
    echo "it is not true";
}

?>
    
</body>
</html>