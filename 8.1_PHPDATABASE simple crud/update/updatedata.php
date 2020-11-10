<?php
include "db.php";
include "function.php";
include "header.php";
global $connection;
/**
 * @param mysqli $connection
 */

if(isset($_POST['submit'])){
    update($connection);

}

?>

<div class="container text-center">

    <form action="" method="post">
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

        <div class="form-group">
            <label for="exampleFormControlSelect1">SELECT id</label>
            <select class="form-control" name="id" id="exampleFormControlSelect1">
                <?php
             showallData();
             ?>
            </select>
        </div>
            <input class="btn btn-primary" type="submit" name="submit" value="submit">


        </form>


</div>
<?php include('footer.php') ?>