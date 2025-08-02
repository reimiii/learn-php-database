<?php

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

$username = "bob'; #";
$password = "admin";

$sql = "select * from user where username = :username and password = :password";
$statement = $connection->prepare($sql);
$statement->bindParam("username", $username);
$statement->bindParam("password", $password);
$statement->execute();

$success = false;
$find_user = null;

foreach ($statement as $row) {
    $success = true;
    $find_user = $row["username"];
}

echo $success
    ? "success log in with username: " . $find_user . PHP_EOL
    : "failed for some reason" . PHP_EOL;

$connection = null;
