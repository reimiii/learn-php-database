<?php

require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();

$username = "noir'; #";
$password = "not my problem";
$sql = "select * from user where username = '$username' and password = '$password';";

echo $sql . PHP_EOL;

$statement = $connection->query($sql);

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
