<?php
define("ROLE_USER", 1);
define("ROLE_ADMIN", 2);
define("ROLE_MODERATOR", 3);


$userRole = ROLE_USER;

if ($userRole == ROLE_ADMIN) {
    echo "Панель администратора<br>";
} elseif ($userRole == ROLE_MODERATOR) {
    echo "Панель модератора<br>";
} else {
    echo "Добро пожаловать на сайт!!<br>";
}

$permissions = 0;

if ($userRole == ROLE_ADMIN) {
    $permissions = 1111;
} else {
    $permissions = 0000;
}

$permissions = ($userRole == ROLE_ADMIN) ? 1111 : 0000;

$defaultPermission = 1111;

$permissions = $defaultPermission ?: 1100 ;
$userId = $_GET['id'] ??  null; //$userId = isset($_GET['id'])  ? $_GET['id'] : null;


switch ($userRole) {
    case ROLE_ADMIN :
        echo "Панель администратора<br>";
        break;
    case ROLE_MODERATOR:
        echo "Панель модератора<br>";
        break;
    default:
        echo "Добро пожаловать на сайт!!<br>";
}

