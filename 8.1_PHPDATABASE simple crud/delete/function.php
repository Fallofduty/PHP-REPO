

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

function delete(mysqli $connection)
{

    $id = $_POST['id']; // get the id of post for selection option
    $query = "DELETE from USERS "; // just a normal query
    $query .= "where id = $id";
    mysqli_query($connection, $query); // pass wjat is needed in query
}

?>
