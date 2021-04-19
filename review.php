
<?php

$servername = "localhost";
$username = "root";
$password = "";
$database= "documentGenerator";

// Create connection
$connect = new mysqli($servername, $username, $password, $database);


$firstname=mysqli_real_escape_string($connect, $_REQUEST['firstname']);
$lastname=mysqli_real_escape_string($connect, $_REQUEST['lastname']);
$email=mysqli_real_escape_string($connect, $_REQUEST['email']);
$review=mysqli_real_escape_string($connect, $_REQUEST['review']);


// Check connection
if ($connect->connect_error) {
 die('Could not connect : ' . $connect->error);
} 


$sql = "INSERT INTO reviews(firstname, lastname, email, review)
VALUES ('$firstname','$lastname', '$email', '$review')";

if ($connect->query($sql) === TRUE) {
  header("location: home.php#testimonial");
//   echo "$email successfully !!";
} else {
//   echo "Error: " . $sql . "<br>" . $connect->error;
}


  $connect ->close();
?>