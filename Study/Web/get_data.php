<?php

include 'connect.php';

$sql = "SELECT * FROM user";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Data Table</title>
</head>
<body>
    <h1>Database Data</h1>
    <style>
        table, th {
            border: 1px solid black;
            border-collapse: collapse;
            color : red;
            padding: 8px;
            text-align: left;
            width: 100%;
        }
        td{
            border: 1px solid black;
            padding: 8px;
            text-align: left;
            color: blue;
            background-color: #f2f2f2;
        }
    </style>
    <table>
        <tr>
            <th>Name</th>
            <th>ID</th>
            <th>Age</th>
            <th>CGPA</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['age'] . "</td>";
                echo "<td>" . $row['cgpa'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No data found</td></tr>";
        }
        ?>
    </table>
</body>
</html>