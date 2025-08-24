<?php
include 'connect.php';
$name = $_POST['name'];
$id = $_POST['id'];
$age = $_POST['age'];
$cgpa = $_POST['cgpa'];

$sql = "INSERT INTO user(name,id,age,cgpa) VALUES('$name','$id','$age','$cgpa')";

if($conn->query($sql)===TRUE) {
    echo "Data inserted successfully.";
    header("location: index.php");
} else {
    echo "Failed to insert data: " . $conn->connect_error;
}
?>