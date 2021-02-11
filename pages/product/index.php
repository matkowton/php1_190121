<?php
$products = getProducts();

$authUser = null;
if($userId = $_SESSION['user_id']) {
    $authUser = getUserById($userId);
}


echo render('catalog', compact('products'));