<?php
include_once __DIR__ . "/../../../config/main.php";
include_once ENGINE_DIR . "base.php";
include_once ENGINE_DIR . "products.php";

if ($id = $_GET['id']) {
    deleteProduct($id);
}
redirect($_SERVER['HTTP_REFERER']);