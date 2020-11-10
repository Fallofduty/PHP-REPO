<?php
// 4 steps to get datab from database
//1 select database
require ('config/config.php');
require ('config/db.php'); // data is needed from database so this is passed
global $connection; // super globaled it

//2 create query what data are tob e shown
//get id
$id = mysqli_real_escape_string($connection,$_GET['id']); // for secrity reason expect connection
$query = 'SELECT * FROM posts where id='.$id;
$result = mysqli_query($connection,$query);


$post = mysqli_fetch_assoc($result); // will rturn one array only.


mysqli_free_result($result);

// 4 close conenction

mysqli_close($connection)

?>
<?php include ('inc/header.php') ?>
<div class="container">
    <a href="index.php" class="btn btn-default">go back</a>
    <h1><?php echo $post['title']; ?> </h1>



       <small>created on by  <?php echo $post['created_at']; ?>  by <?php echo $post['author']?></small>
       <p><?php echo $post['body']; ?></p>
       <a class="btn btn-default" href="post.php?id=<?php echo $post['id']; ?>">Read more</a>


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


