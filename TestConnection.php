<?php

declare(strict_types=1);

$host = "localhost";
$port = 3306;
$database = "just_php";
$username = "root";
$password = "root";

$dsn = "mysql:host={$host}:{$port};dbname={$database};";

try {
    $pdo = new PDO(dsn: $dsn, username: $username, password: $password);
    echo "Successfully connected to MySQL database" . PHP_EOL;
} catch (PDOException $e) {
    echo "Database connection failed: " . $e->getMessage() . PHP_EOL;
} finally {
    $pdo = null; // Explicitly close the connection
}
