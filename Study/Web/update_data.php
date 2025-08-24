

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Update CGPA</title>
</head>
<body>
    <h1>Give Your ID to Update CGPA</h1>
   
    <form action="update_data.php" method="POST">
        <label for="id">ID:</label>
        <input type="text" id="id" name="id" required>
        <br><br>
        <label for="cgpa">CGPA:</label>
        <input type="number" id="cgpa" name="cgpa" step="0.01" required>
        <br><br>
        <input type="submit" value="Update CGPA">
    </form>
</body>
</html>

<?php
include 'connect.php';

if (isset($_POST['id']) && isset($_POST['cgpa'])) {
    $id = $_POST['id'];
    $cgpa = $_POST['cgpa'];

    $sql = "UPDATE user SET cgpa='$cgpa' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "CGPA updated successfully.";
    } else {
        echo "Error updating CGPA: " . $conn->error;
    }
} 
?>
