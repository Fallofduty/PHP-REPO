<?php
require 'connection.php';
global $stmt,$pdo;
//get row count

$stmt = $pdo->prepare('SELECT * from posts where author=:author');
$stmt->execute(['author'=>$author]);
$postCount = $stmt->rowCount();
echo $postCount; //1 cause nafu has only one post

$title ='post 3';
$body = 'this is post 3';
$author = "kevin";

$stmt=$pdo->prepare('Insert into Posts(title,body,author) Values(:title,:body,:author)');
$stmt->execute(['title'=>$title,'body'=>$body,'author'=>$author]);
