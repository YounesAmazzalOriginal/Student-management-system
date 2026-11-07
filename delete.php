<?php
    require "db.php";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST["id"];

        $stmt = $pdo->prepare("DELETE FROM students WHERE id = ?");
        $stmt->execute([$id]);

        header("Location: index.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
    <link rel="stylesheet" href="css/delete.css">
</head>
<body>
    <form method="post" action="delete.php">
        <input type="number" name="id" placeholder="Enter student ID" required>
        <button type="submit">Delete Student</button>
    </form>
</body>
</html>