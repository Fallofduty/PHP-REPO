<?php
require 'connection.php';
global $stmt,$pdo;
$stmt = $pdo->query('SELECT * FROM posts');
while ($row=$stmt->fetch(PDO::FETCH_ASSOC)){
   echo $row['title'] .'<br>';
}
/*
 * how to use ps4
how to use xbox
 */

