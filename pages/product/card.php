<?php
$id = (int) $_GET['id'];

$product = getProductById($id);
$feedbacks = getFeedbacksByProductId($id);
echo render('card', compact('product', 'feedbacks'));