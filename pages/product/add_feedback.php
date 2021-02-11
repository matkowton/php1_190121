<?php
$product_id = (int) $_POST['product_id'];
$content = $_POST['content'];


createFeedback($product_id, $content);
redirectToReferer();