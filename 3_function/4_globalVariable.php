<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //global avilable outside function
    // local only inside function. 
 $x = "outside"; // global variable 
function convert()
{
    global $x; // must make the variable inside function. 
     $x="inside";
     
}

convert();// will change the function
echo $x;



    ?>
</body>
</html>