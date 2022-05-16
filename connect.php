<?php
$severname = "localhost";
$username = "root";
$password = "root";
$db = "contacts-db";

// Create connection 

$conn = mysqli_connect($severname, $username, $password, $db);

// Check connection
if(!$conn){
    die("Connection faild: " . mysqli_connect_errno());
}
//echo "Connection successfully";
?>