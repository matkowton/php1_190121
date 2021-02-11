<?php
$products = getProducts();

echo render('admin/products/index', compact('products'));
