<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $productId = $_POST['product_id'];
    $productQty = $_POST['qty'];

    if(isset($_SESSION['basket'][$productId])) {
        $_SESSION['basket'][$productId] += $productQty;
    } else {
        $_SESSION['basket'][$productId] = $productQty;
    }
}

echo json_encode(['status' => 'success', 'message' => 'товар успешно добавлен в корзину']);
