<?php
include_once ENGINE_DIR . "db.php";

function getMenu(array $accessLevels = []): array
{
    if(empty($accessLevels)) {
        $accessLevels = [0];
    }
    $condition = implode(", ", $accessLevels);
    $sql = "SELECT * FROM menu 
            WHERE access IN ({$condition}) 
            ORDER BY `order`";
    return queryAll($sql);
}
