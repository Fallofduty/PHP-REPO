

<?php
include "db.php";
function showallData()
{
    global $connection;
    global $query;
    $result = mysqli_query($connection, $query);
    while ($row=mysqli_fetch_assoc($result)){
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
    }
}

function update(mysqli $connection)
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];
    $query = "UPDATE users SET ";
    $query .= "username = '$username',";
    $query .= "password = '$password'";
    $query .= "where id = $id";
    mysqli_query($connection, $query);
}

?>
