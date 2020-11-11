<?php
session_start();

$name = $_SESSION['name']; // passing the sesson from here
$email = $_SESSION['email']; //passing the session  email



?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php session</title>
</head>
<body>
<h5>ty <?php  echo $name ?></h5>
<h5>ty <?php echo $email?></h5>
<a href="page3.php">go to page 3</a>
</body>
</html>
