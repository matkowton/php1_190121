<?php
if(isset($_GET['id'])){
    $productId = $_GET['id'];
    if(isset($_SESSION['basket'][$productId])){
        unset($_SESSION['basket'][$productId]);
    }
}
redirectToReferer();