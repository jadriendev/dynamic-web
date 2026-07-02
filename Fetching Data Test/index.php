<?php
include_once 'config.php';

$sql = "SELECT * FROM  products";
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
            <a href="product.php?id=<?= $row['id']; ?>">View Details</a>
        <?php } ?>
    </div>
</body>
</html>