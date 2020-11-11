<?php
session_start(); // this is a must if its not provided will show an error and program will not work

$email = $_SESSION['email']; //passing the session  email
// lets change the name


//$_SESSION['name'] ='nafu';
$name=isset($_SESSION['name']) ? $_SESSION['name']:'guest'; // name will chagned ot nafu now

print_r($_SESSION); // Array ( [name] => nafu [email] => nafu22@gmail.com ) gives session array

?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <h5>ty <?php  echo $name ?></h5>
    <h5>ty <?php echo $email?></h5>
</head>
<body>

</body>
</html>
