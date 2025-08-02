<?php

require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();

$sql = <<<SQL
    insert into customer(name, address)
    values ('Ze', 'Noir Is The Way');
SQL;

$connection->exec($sql);

$connection = null;
