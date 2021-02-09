<?php
include_once __DIR__ . "/../../../config/main.php";
include_once ENGINE_DIR . "products.php";
include_once ENGINE_DIR . "menu.php";
if($id = $_GET['id']) {
    $product = getProductById($id);
}

$menu = getMenu();
include  VIEWS_DIR . 'admin/products/view.php';