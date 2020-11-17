<?php

require 'connection.php';
global $stmt,$pdo;
$id = 1;
$body ='this is the update post';

$stmt=$pdo->prepare("UPDATE posts set body=:body where id=:id");
$stmt->execute(['body'=>$body,'id'=>$id]);