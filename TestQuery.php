<?php

require_once 'GetConnection.php';

$connection = getConnection();

$sql = 'select id, name, address, created_at from customer';
$statement = $connection->query($sql);

foreach ($statement as $row) {
    $id = $row["id"];
    $name = $row["name"];
    $address = $row["address"];

    echo "Id : $id" . PHP_EOL;
    echo "Name : $name" . PHP_EOL;
    echo "Address : $address" . PHP_EOL;
    echo "------" . PHP_EOL;
}

$connection = null;
