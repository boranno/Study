<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Search for a student by Student ID</h1>
    <form action="search_in_db.php" method="POST">
        <label for="id">Enter Student ID:</label>
        <input type="text" id="id" name="id" required>
        <br><br>
        <input type="submit" value="Search">
    </form>
</body>
</html>

<?php
include 'connect.php';
$id = isset($_POST['id']) ? $_POST['id'] : '';
$searchResults = [];
if (!empty($id)) {
    $sql = "SELECT * FROM user WHERE id = '$id'";
    $result = $conn->query($sql);
    if ($result && $result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $searchResults[] = $row;
        }
    }
}
?>

<?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
    <?php if (!empty($searchResults)): ?>
        <h2>Search Results:</h2>
        <table border="1">
            <tr>
                <th>Name</th>
                <th>ID</th>
                <th>Age</th>
                <th>CGPA</th>
            </tr>
            <?php foreach ($searchResults as $row): ?>
                <tr>
                    <td><?php echo htmlspecialchars($row["name"]); ?></td>
                    <td><?php echo htmlspecialchars($row["id"]); ?></td>
                    <td><?php echo htmlspecialchars($row["age"]); ?></td>
                    <td><?php echo htmlspecialchars($row["cgpa"]); ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p>No results found for ID: <?php echo htmlspecialchars($id); ?></p>
    <?php endif; ?>
<?php endif; ?>