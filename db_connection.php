<?php
$db_connection = mysqli_connect("localhost","root","","documentGenerator");
// Check connection
if (mysqli_connect_errno()){
    //header("location: home.php" );
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>