<?php

require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();

$connection->exec("insert into comment(name, comment_text) values ('Noir', 'Yes This Is Noir Territorial')");
$id = $connection->lastInsertId();

echo $id . PHP_EOL;

$connection = null;
