<?php
include_once 'config.php';

$id = $_GET['id'];

$sql = "SELECT * FROM products WHERE id = $id";
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
    <div>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <h1><?= $row['product_name']; ?></h1>
            <h3>Price: <?= $row['price']; ?></h3>
            <p>Stock: <?= $row['stock']; ?></p>
        <?php } ?>
    </div>
</body>
</html>