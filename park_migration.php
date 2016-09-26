<?php 

define('DB_HOST','127.0.0.1');
define('DB_NAME', 'parks_db');
define('DB_USER', 'parks_user');
define('DB_PASS', 'codeup');
require 'db_connect.php';
echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";


$queryDelete = 'DROP TABLE IF EXISTS national_parks';
$dbc->exec($queryDelete);
echo "Droped if existed".PHP_EOL;
$queryCreateTabe = 'CREATE TABLE national_parks (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    location VARCHAR(50) NOT NULL,
    date_established DATE,
    area_in_acres DOUBLE,
    description TEXT,
    PRIMARY KEY (id)
    );';
$dbc->exec($queryCreateTabe);
echo "Table created".PHP_EOL;

