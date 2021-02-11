<?php
$basket = [];
if (!empty($_SESSION['basket'])) {
    $productIds = array_filter(
        array_keys($_SESSION['basket']),
        function ($element) {
            return is_int($element);
        }
    );

    $products = getProducts($productIds);
    foreach ($products as $product) {
        $basket[] = [
            'product' => $product,
            'qty' => $_SESSION['basket'][$product['id']]
        ];
    }
}

echo render('basket', compact('basket'));

