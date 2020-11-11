
<?php
if(isset($_POST['submit'])){
  session_start(); // this idnicte session ha started
    $_SESSION['name'] =$_POST['name']; //putting the name is session varaible
    $_SESSION['email'] = $_POST['email']; // putting the email in email variable
    header('Location:pag2.php');
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
<form action="" method="post">
    <label for="name">name</label>
    <input type="text" name="name" id="name" placeholder="enter name">
    <label for="email"> email</label>
    <input type="text" name="email" id="email" placeholder="enter email">
    <button name="submit">submit</button>

</form>
</body>
</html>
