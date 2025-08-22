<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Want to found someone search by Student Id </h1>
    <form action="search_in_db.php" method="POST">
        <label for="id">Enter Student ID:</label>
        <input type="text" id="id" name="id" required>
        <br><br>
        <input type="submit" value="Search">
</body>
</html>

<?php
include 'connect.php';
$id = $_POST['id'];
$sql = "SELECT * FROM user WHERE id = '$id' OR LIKE '%$id%' ";
$result = $conn->query($sql);
if ($result->num_rows >0){
    echo "<h2>Search Results:</h2>";
    echo "<table border='1'>
            <tr>
                <th>Name</th>
                <th>ID</th>
                <th>Age</th>
                <th>CGPA</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["name"]. "</td><td>" . $row["id"]. "</td><td>" . $row["age"]. "</td><td>" . $row["cgpa"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "No results found for ID: $id";
}

?>