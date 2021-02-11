<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product = $_POST['product'];

    if(isset($product['id']) && $productId = $product['id']) {
        updateProductById($productId, $product['title'], $product['description'], $product['price']);
    } else {
        $productId = createProduct($product['title'], $product['description'], $product['price']);
    }
    redirect("/admin_products/view?id={$productId}");
}
redirectToReferer();