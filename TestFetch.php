<?php

require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();

$username = "bob";
$password = "password";

$sql = "select * from user where username = :username and password = :password";
$statement = $connection->prepare($sql);
$statement->bindParam("username", $username);
$statement->bindParam("password", $password);
$statement->execute();

$u = $statement->fetch()['username'] ?? "nope";

echo $u . PHP_EOL;

$connection = null;
