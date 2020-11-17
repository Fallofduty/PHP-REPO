<?php
require 'connection.php';
global $stmt,$pdo;

//delete data
$id = 5;


$stmt=$pdo->prepare("DELETE from posts where  id=:id");
$stmt->execute(['id'=>$id]);