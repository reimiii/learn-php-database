<?php

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

$username = "alice";
$password = "password";

$sql = "select * from user where username = ? and password = ?";
$statement = $connection->prepare($sql);
$statement->bindParam(1, $username);
$statement->bindParam(2, $password);
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
