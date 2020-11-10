<?php
$connection = mysqli_connect('localhost','root','','loginapp'); // this is nedded for connection
$query = "SELECT * FROM users"; // this like any database statment select* from user which is the table name
$result = mysqli_query($connection,$query); // looking for connection name and $query from the tables
?>

