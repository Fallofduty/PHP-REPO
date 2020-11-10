

<?php
require ('config/config.php');
require ('config/db.php'); // data is needed from database so this is passed
global $connection; // super globaled it
// 4 steps to get datab from database
//1 select database

if(isset($_POST['delete'])) {
$id = $_GET['id'];
$query = "DELETE FROM posts ";
$query .= "where id=$id";


    mysqli_query($connection, $query); // then pusing the qury here


}


//2 create query what data are tob e shown
//get id
$id = mysqli_real_escape_string($connection,$_GET['id']); // for secrity reason expect connection
$query = 'SELECT * FROM posts where id='.$id;
$result = mysqli_query($connection,$query);


$post = mysqli_fetch_assoc($result); // will rturn one array only.


mysqli_free_result($result);

// 4 close conenction

mysqli_close($connection);


?>
<?php include ('inc/header.php') ?>
<div class="container">
    <a href="index.php" class="btn btn-default">go back</a>
    <h1><?php echo $post['title']; ?> </h1>



    <small>created on by  <?php echo $post['created_at']; ?>  by <?php echo $post['author']?></small>
    <p><?php echo $post['body']; ?></p>
    <a class="btn btn-default" href="editpost.php?id=<?php echo $post['id']; ?>">edit</a>

    <form  class="pull-right" method="post" >
        <input type="hidden" name="delete_id" value="<?php echo $post['id']; ?> ">
        <a href="index.php"><input type="submit" name="delete" value="delete" class="btn btn-danger"></a>

    </form>

    <?php
    /*
      * Posts
    post one
    created on 2020-11-09 19:55:14
    created by nafis ishtiaque
    post2
    created on 2020-11-09 19:55:14
    created by nafu
     this is the the outoput
      */
    ?>
</div>
<?php include ('inc/footer.php') ?>

