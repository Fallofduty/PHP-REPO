<?php
//create connection
$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
// check for conenction
if(mysqli_connect_errno()){
    echo "ecconection failed " .mysqli_connect_errorno();  // use this for to check if the database is working or not.
}
?>