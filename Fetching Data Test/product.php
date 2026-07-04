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
    <?php while ($row = $result->fetch_assoc()) { ?>
    <title><?= $row['product_name']; ?> | View Details</title>
</head>
<body>
    <div>
        <h1><?= $row['product_name']; ?></h1>
        <h3>Price: <?= $row['price']; ?></h3>
        <h3>Stock: <?= $row['stock']; ?></h3>
    <?php } ?>
    </div>
</body>
</html>