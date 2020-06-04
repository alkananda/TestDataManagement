<?php

$servername="sql12.freemysqlhosting.net";
$username="sql12345496";
$password="Qp9HXjTTfJ";
$dbname="sql12345496";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if(!$conn)
{
    echo "No DB found";
    die("Connection failed: " . mysqli_connect_error());
}

?>
