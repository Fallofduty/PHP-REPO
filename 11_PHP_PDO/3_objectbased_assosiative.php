<?php
require 'connection.php';
global $stmt,$pdo;

$author ="nafu"; //$author should be same as thee key
$sql = "SELECT * FROM POSTS where author =:author"; // this will be eassotiave array way
//? is potional parameter
$stmt = $pdo->prepare($sql);
$stmt->execute(['author'=>$author]);
/*
 * refer to author then go to key $author
 *
 */
$posts = $stmt->fetchAll();
foreach ($posts as $post){
    echo $post->title.'<br>';
}


$id=1;
$sql = "SELECT * FROM POSTS where id=:id "; // this will be eassotiave array way
//used && is same as using and on and
$stmt = $pdo->prepare($sql);
$stmt->execute(['id'=>$id]);
$post = $stmt->fetch();
echo $post->body.'<br>';
echo $post->title.'<br>';
echo $post->author.'<br>';
/*
 * urn it on
how to use ps4
nafis ishtiaque
 */
