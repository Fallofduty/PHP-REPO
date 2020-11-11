<?php
if(isset($_POST['submit'])){
    $username = htmlentities($_POST['username']);

    setcookie('username',$username,time()+3600);// cookie will be set for 1 hour here
    // takes the post name,
    // the varible name is being stored
    // and time 3600 whhich means it will stay for 3 min 3600 second.

    header('Location: page2.php');
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="<?php  echo $_SERVER['PHP_SELF'] ?>" method="post">
    <label for="name">name</label>
    <input type="text" name="username" id="name" placeholder="enter name">
    <label for="email"> email</label>
    <input type="text" name="email" id="email" placeholder="enter email">
    <button name="submit">submit</button>

</form>
</body>
</html>

