<?php
if ($id = $_GET['id']) {
    deleteProduct($id);
}
redirect($_SERVER['HTTP_REFERER']);