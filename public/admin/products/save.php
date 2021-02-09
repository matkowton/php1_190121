<?php
include_once __DIR__ . "/../../../config/main.php";
include_once ENGINE_DIR . "base.php";
include_once ENGINE_DIR . "products.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product = $_POST['product'];

    if(isset($product['id']) && $productId = $product['id']) {
        updateProductById($productId, $product['title'], $product['description'], $product['price']);
    } else {
        $productId = createProduct($product['title'], $product['description'], $product['price']);
    }
    redirect("/admin/products/view.php?id={$productId}");
}
redirectToReferer();