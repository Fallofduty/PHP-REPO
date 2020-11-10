<?php
// 4 steps to get datab from database
//1 select database
require ('config/config.php');
require ('config/db.php'); // data is needed from database so this is passed
global $connection; // super globaled it

if(isset($_POST['Submit'])){
    $update_id = mysqli_real_escape_string($connection, $_POST['update_id']); // needs connectuon and what will we be passing here
    $title = mysqli_real_escape_string($connection, $_POST['title']); // needs connectuon and what will we be passing here
    $body = mysqli_real_escape_string($connection, $_POST['body']);
    $author = mysqli_real_escape_string($connection, $_POST['author']);

    $query = "INSERT INTO posts (title,author,body) values ('$title','$author','$body')"; // a simple insert into values php order by php value name order.

mysqli_query($connection,$query); // then pusing the qury here
}


?>
<?php include ('inc/header.php') ?>
    <div class="container">
       <h1>add post </h1>
        <form action="" method="post">

          <div class="form-group">
              <label for="name">title</label>
              <input type="text"  name="title" id="name" class="form-control">
          </div>

            <div class="form-group">
              <label for="name">author</label>
              <input type="text" name="author" id="name" class="form-control">
          </div>

            <div class="form-group">
              <label for="name">post description</label>
              <input type="text" name="body" id="name" class="form-control">

          </div>
            <input type="submit" name="Submit" value="Submit" class="btn btn-primary">
        </form>
    </div>

<?php include ('inc/footer.php')?>