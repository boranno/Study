<?php

$host= "localhost";
$username = "root";
$password = "";
$dbname = "webpractic";

// Create connection

$conn =new mysqli($host,$username,$password,$dbname);

if ($conn->connect_error) {
    echo "Connection could not be established: " . $conn->error;
} else {
    echo "Connection established successfully.";
}

?>