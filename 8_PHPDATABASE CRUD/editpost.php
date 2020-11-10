<?php
// 4 steps to get datab from database
//1 select database
require ('config/config.php');
require ('config/db.php'); // data is needed from database so this is passed
global $connection; // super globaled it



if(isset($_POST['Submit'])) {

    $title = $_POST['title']; // needs connectuon and what will we be passing here
    $body = $_POST['body'];  // getting all thesse values
    $author =$_POST['author'];
    $id=$_GET['id']; // id is the get

    $query = "UPDATE posts set "; // update statment
    $query .="title='$title',";
    $query.= "body='$body',";
    $query.="author='$author'";
    $query.="where id =$id"; // do not put string here it wont work it will cause a error as it needs to be integer


    mysqli_query($connection, $query); // then pusing the qury here


}
?>
<?php include ('inc/header.php') ?>
<div class="container">
    <h1>edit post</h1>
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