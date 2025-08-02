<?php

function getConnection(): PDO
{
    $host = "localhost";
    $port = 3306;
    $database = "just_php";
    $username = "root";
    $password = "root";

    $dsn = "mysql:host={$host}:{$port};dbname={$database};";

    return new PDO(dsn: $dsn, username: $username, password: $password);
}
