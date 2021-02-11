<?php
include_once __DIR__ . "/../../config/main.php";
include ENGINE_DIR . "db.php";

$sql = 'ALTER TABLE menu ADD COLUMN `access` int DEFAULT 0';

execute($sql);