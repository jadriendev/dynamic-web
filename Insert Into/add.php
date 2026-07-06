<?php
include_once 'config.php';

if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $section = $_POST['section'];
        $age = $_POST['age'];

        $sql = "INSERT INTO informations (name, section, age) VALUES ('$name', '$section', '$age')";
        $result = mysqli_query($conn, $sql);

        header("Location: index.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label for="name">Name:</label>
        <input type="text" name="name" id="">

        <label for="section">Section:</label>
        <select name="section" id="">
            <option value="BSIT-1A">BSIT-1A</option>
            <option value="BSIT-2B">BSIT-2B</option>
            <option value="BSIT-3C">BSIT-3B</option>
        </select>

        <label for="age">Age:</label>
        <input type="text" name="age">

        <input type="submit" name="submit">
    </form>
</body>
</html>