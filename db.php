<?php
try {
    $dsn = "mysql:host=localhost;charset=utf8mb4";
    // $dsn = "mysql:host=localhost;dbname=studentsdb;charset=utf8mb4";
    $user = "root";
    $pass = "";

    $pdo = new PDO($dsn, $user, $pass);

    $pdo->exec("CREATE DATABASE IF NOT EXISTS studentsdb");
    $pdo->exec("USE studentsdb");
    
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    die("Erreur : " . $e->getMessage());
}