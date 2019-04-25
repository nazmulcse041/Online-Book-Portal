<?php


$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,"bookportal");

if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>