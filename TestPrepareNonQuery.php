<?php

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

$username = "noir";
$password = "password";
$email = "mail@me.com";

$sql = "insert into user (username, password, email) values (:username, :password, :email)";
$statement = $connection->prepare($sql);
$statement->bindParam("username", $username);
$statement->bindParam("password", $password);
$statement->bindParam("email", $email);
$statement->execute();

echo $connection->lastInsertId() . PHP_EOL;

$connection = null;
