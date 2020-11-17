<?php

require 'connection.php';
global $stmt,$pdo;

$search = "%post%";
$sql = 'SELECT * from POSTS where title like ?';
$stmt = $pdo->prepare($sql);
$stmt->execute([$search]);
$posts=$stmt->fetchAll();
foreach ($posts as $post){
    echo $post->title .'<br>';
}
/*
 * this is the update post

 */