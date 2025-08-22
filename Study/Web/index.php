<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is the example of a Form</h1>
    <form action="insert_data.php" method="POST">
        <label for ="name">NAME</label>
        <input type="text" id="name" name="name" required>
        <br><br>
        <label for="id">ID</label>
        <input type="text" id="id" name="id" required>
        <br><br>
        <label for ="age">AGE</label>
        <input type="number" id="age" name="age" required>
        <br><br>
        <label for="cgpa">CGPA</label>
        <input type="number" id="cgpa" name="cgpa" required>
        <br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
