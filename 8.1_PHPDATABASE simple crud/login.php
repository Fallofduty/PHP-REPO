
<?php

if(isset($_POST["submit"])){
$username = $_POST['username'];
$password = $_POST["password"];
$connection = mysqli_connect('localhost','root','','loginapp');
/*
 * explanation
 * mysqil_connect lets to connetct to database
 * there are 4 paremeters here
 * firs is host which is the lccal host
 * 2nd is the user root
 * 3rd is the password
 * and 4th is the database
 */

    $query = "INSERT INTO users(username,password)"; // what values are going to be insrted here by column name
    $query .="values('$username','$password')"; // concated with .values
    mysqli_query($connection,$query); // result will be stored here with database
    // this puts the data in as link and query

    //reading from dat

}
?>
<?php include ('INC/header.php');?>
<div class="container text-center">
    <div class="col-sm-6">
        <form action="login.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control">
            </div>
            <input class="btn btn-primary" type="submit" name="submit" value="submit">

        </form>

    </div>

</div>
<?php include ('INC/footer.php');?>