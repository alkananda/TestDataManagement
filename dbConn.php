<?php

$servername="localhost";
$username="root";
$password="testing";
$dbname="demo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if(!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>