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
    <title>Fetching</title>
</head>
<body>
    <table border="1">
        <thead>
            <th>Name</th>
            <th>Age</th>
            <th>Section</th>
        </thead>

        <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['age']; ?></td>
            <td><?php echo$row['section']; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>