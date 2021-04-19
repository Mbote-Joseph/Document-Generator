
<?php

$servername = "localhost";
$username = "root";
$password = "";
$database= "documentGenerator";

// Create connection
$connect = new mysqli($servername, $username, $password, $database);


$email=mysqli_real_escape_string($connect, $_REQUEST['email']);


// Check connection
if ($connect->connect_error) {
 die('Could not connect : ' . $connect->error);
} 


$sql = "INSERT INTO subscribers(email)
VALUES ('$email')";

if ($connect->query($sql) === TRUE) {
  header("location: home.php#footer");
  // echo "$email successfully !!";
} else {
  // echo "Error: " . $sql . "<br>" . $connect->error;
}



  $connect ->close();
?>