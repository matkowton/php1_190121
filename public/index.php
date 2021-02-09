<?php
include_once __DIR__ . "/../config/main.php";
include ENGINE_DIR . "render.php";
include ENGINE_DIR . "users.php";
include ENGINE_DIR . "menu.php";
include ENGINE_DIR . "products.php";
session_start();

$products = getProducts();
$menu = getMenu();

$authUser = null;

/*if($userId = $_COOKIE['user_id']) {
    $authUser = getUserById($userId);
}
*/

if($userId = $_SESSION['user_id']) {
    $authUser = getUserById($userId);
}

if(!is_null($authUser)) {
    echo "Привет, {$authUser['login']}";
}


include VIEWS_DIR . "catalog.php";
