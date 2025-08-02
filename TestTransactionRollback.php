<?php

require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();

$connection->beginTransaction();

$connection->exec("insert into comment (name, comment_text) values ('ze name is me', 'hi ta m')");
$connection->exec("insert into comment (name, comment_text) values ('ze name is me', 'hi ta m')");
$connection->exec("insert into comment (name, comment_text) values ('ze name is me', 'hi ta m')");
$connection->exec("insert into comment (name, comment_text) values ('ze name is me', 'hi ta m')");
$connection->exec("insert into comment (name, comment_text) values ('ze name is me', 'hi ta m')");

$connection->rollBack();

$connection = null;
