<?php
// require MySQL database connection
require ('./DBController.php');

// require Reviews class
require ('./reviewsdb.php');

// DBController object
$db = new DBController();

// Review Object
$reviews = new Reviews($db);

print_r($reviews->getData());


?>
