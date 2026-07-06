<?php
include_once 'config.php';

$sql = "SELECT * FROM informations";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php while ($row = $result->fetch_assoc()) { ?>
        <h1><?= $row['name']; ?></h1>
        <h3><?= $row['section']; ?></h3>
        <h3><?= $row['age']; ?></h3>
    <?php } ?>

    <a href="add.php">Add Student</a>
</body>
</html>