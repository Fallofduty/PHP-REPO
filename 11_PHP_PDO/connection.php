<?php
$host = 'localhost';
$user = 'root';
$password ='1234';
$dbname = "devtest";


//set DSN
//describe conenction to database
$dsn = 'mysql:host='.$host.';dbname='.$dbname;

//create a pdo instant
$pdo = new PDO($dsn,$user,$password);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false); // this will let the limit to be used











//search data
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