<?php
    require_once "db.php";

    $sql = "CREATE TABLE IF NOT EXISTS students (
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        firstname VARCHAR(10) NOT NULL,
        lastname VARCHAR(10) NOT NULL,
        age INT NOT NULL,
        email VARCHAR(150) NOT NULL
    )";

    $pdo->exec($sql);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $stmt = $pdo->prepare("INSERT INTO students (firstname, lastname, age, email) VALUES (?,?,?,?)");
        $stmt->execute([
            $_POST["firstname"],
            $_POST["lastname"],
            $_POST["age"],
            $_POST["email"],
        ]);

         header("Location: index.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link rel="stylesheet" href="css/create.css">
</head>
<body>
    <form method="post">
        <h2>Create Student</h2>
        <p>Enter the student's information below.</p>

        <input type="text" name="firstname" placeholder="First name" required>
        <input type="text" name="lastname" placeholder="Last name" required>
        <input type="number" name="age" placeholder="Age" min="1" required>
        <input type="email" name="email" placeholder="Email address" required>

        <button type="submit">Add Student</button>
    </form>
</body>
</html>