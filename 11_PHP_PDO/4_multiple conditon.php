<?php
require 'connection.php';
global $stmt,$pdo;

$is_published=true;
$sql = "SELECT * FROM POSTS where author =:author && is_published=:is_published "; // this will be eassotiave array way
//used && is same as using and on and
$stmt = $pdo->prepare($sql);
$author ="nafu"; //$author should be same as thee key
$stmt->execute(['author'=>$author,'is_published'=>$is_published]);
/*
 * refer to author then go to key $author
 *
 */
$posts = $stmt->fetchAll();
foreach ($posts as $post){
    echo $post->title.'<br>';
}

/*
 * how to use xbox
 */

//fetching single post