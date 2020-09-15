<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $userName = $_POST["user_name"];
    $email = $_POST["user_email"];
    $password = $_POST["user_password"];
    $age= $_POST["user_rage"];
    $job = $_POST["user_job"];
    $bio = $_POST["user_bio"];

    echo $userName; // nafis
    echo "<br>";
    echo $email; // 
    
    echo $age; //under_13
    echo "<br>";
    echo $job; // front-End Developer
    echo "<br>";    
    echo $bio; // I am learning php
    echo "<br>";

    if(!empty($_POST["user_interest"])){ 
        /**
         * check whether its empty or not 
         *  if its not then for each is excuted. 
         */
        
        foreach($_POST["user_interest"] as $user_interest){
            echo "user interests:<p>$user_interest </p><br>";
        }
    
    }
    else{
        echo("nothing selected");
    }
   
    ?>
</body>
</html>