<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <H1>Enter ID To Delete Data</H1>
    <label for="delete_id"> ID :</label>
    <form action="delete_data.php" method="POST">
        <input type="text" id="delete_id" name="delete_id" required>
        <br><br>
        <input type="submit" value="Delete Data">

<?php
include 'connect.php';

F
