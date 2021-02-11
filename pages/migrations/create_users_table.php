<?php
include_once __DIR__ . "/../../config/main.php";
include ENGINE_DIR . "db.php";

$sql = 'CREATE TABLE users (
    id int AUTO_INCREMENT PRIMARY KEY,
    login varchar(50),
    password varchar(32)
)';

execute($sql);