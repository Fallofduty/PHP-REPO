<?php
require 'connection.php';
global $stmt,$pdo;

$sql = "SELECT * FROM POSTS where author =?";
//? is potional parameter
$stmt = $pdo->prepare($sql);
$author ="nafu"; //$author should be same as thee key
$stmt->execute([$author]);
$posts = $stmt->fetchAll(); // will get all the data here

//looping with for each
foreach ($posts as $post){
    echo $post->title.'<br>';
}