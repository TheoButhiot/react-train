<?php

require_once 'db.php';

$queries = [
    "CREATE TABLE IF NOT EXISTS users
    (
        id INT(4) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL COLLATE 'utf8_general_ci',
        password VARCHAR(255) NOT NULL COLLATE 'utf8_general_ci',
        email VARCHAR(255) NOT NULL COLLATE 'utf8_general_ci',
        zipcode INT (5) NOT NULL COLLATE 'utf8_general_ci'
    ) ",
     
];

foreach ($queries as $query) {
    try {
        $statement = $connection->prepare($query);
        $statement->execute();
    } catch (Exception $e) {
        echo 'Erreur : ' . $e->getMessage() .'<br/>';
    }
}

