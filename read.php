<?php
    require "db.php";
    $stmt = $pdo->query("SELECT * FROM students");

    $students = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read</title>
    <link rel="stylesheet" href="css/read.css">
</head>
<body>
    <div class="table-container">
        <h2>Students List</h2>
        <table>
            <tr>
                <th>Id</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Age</th>
                <th>Email</th>
            </tr>

            <?php foreach ($students as $student) : ?>
            <tr>
                <td><?= htmlspecialchars($student["id"])?></td>
                <td><?= htmlspecialchars($student["firstname"])?></td>
                <td><?= htmlspecialchars($student["lastname"])?></td>
                <td><?= htmlspecialchars($student["age"])?></td>
                <td><?= htmlspecialchars($student["email"])?></td>
            </tr>
            <?php endforeach ?>
        </table>
    </div>
</body>
</html>