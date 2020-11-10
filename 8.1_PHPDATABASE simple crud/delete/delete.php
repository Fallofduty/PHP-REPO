<?php
include "db.php";
include "function.php";
include "header.php";
global $connection;
/**
 * @param mysqli $connection
 */

if(isset($_POST['submit'])){
    delete($connection); // thss will delete button

}

?>

<div class="container text-center">

    <form action="" method="post">


        <div class="form-group">
            <label for="exampleFormControlSelect1">SELECT id to delete</label>
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