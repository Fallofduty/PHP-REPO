<?php
$user = ["name"=>"nafis","password"=>"1234"];
$user = serialize($user); // wi
setcookie( 'user',$user,time()+(8600*30));
//to read it
$user = unserialize($_COOKIE['user']);
echo $user;
