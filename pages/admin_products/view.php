<?php
$params = [];
if($id = $_GET['id']) {
    $params['product'] = getProductById($id);
}

echo render('admin/products/view', $params);