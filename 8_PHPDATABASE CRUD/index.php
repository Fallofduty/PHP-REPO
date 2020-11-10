<?php
// 4 steps to get datab from database
//1 select database
require ('config/config.php');
require ('config/db.php'); // data is needed from database so this is passed
global $connection; // super globaled it

//2 create query what data are tob e shown
$query = 'SELECT * FROM posts';
$result = mysqli_query($connection,$query); // requires connection which connects to database and qeury what query is going to be run.

// fetch data from database this is in asositave array form
$posts = mysqli_fetch_all($result,MYSQLI_ASSOC); // creates an assositav array;

//print_r($posts);
/*
 * Array ( [0] => Array ( [id] => 1 [title] => post one [body] =>
 * this is my very first on this awesome blog [author] => nafis ishtiaque
 *  [created_at] => 2020-11-09 19:55:14 ) [1] => Array ( [id] => 2 [title] => post2 [body] => this is my 2nd post [author] => nafu [created_at] => 2020-11-09 19:55:14 ) )
 * all the data has been gotten from assosiave array from php.
 */
// 3 get data
mysqli_free_result($result);

// 4 close conenction
mysqli_close($connection)

?>
<?php include ('inc/header.php') ?>
<div class="container">
    <h1>Posts</h1>
    <?php  foreach($posts as $post) :?>
        <div class="well">
            <h3><?php echo $post['title']; ?> </h3>
            <small>created on by  <?php echo $post['created_at']; ?>  by <?php echo $post['author']?></small>
            <p><?php echo $post['body']; ?></p>
            <a class="btn btn-default" href="post.php?id=<?php echo $post['id']; ?>">Read more</a>
        </div>
    <?php  endforeach;?>
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

<?php include ('inc/footer.php')?>
