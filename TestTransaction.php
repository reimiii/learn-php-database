<?php

require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();

$connection->beginTransaction();

$connection->exec("insert into comment (name, comment_text) values ('ze name', 'hi ta m')");
$connection->exec("insert into comment (name, comment_text) values ('ze name', 'hi ta m')");
$connection->exec("insert into comment (name, comment_text) values ('ze name', 'hi ta m')");
$connection->exec("insert into comment (name, comment_text) values ('ze name', 'hi ta m')");
$connection->exec("insert into comment (name, comment_text) values ('ze name', 'hi ta m')");

$connection->commit();

$connection = null;
