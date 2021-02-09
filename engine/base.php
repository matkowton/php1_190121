<?php
function redirect (string $url) {
    header("Location: {$url}");
    exit();
}

function redirectToReferer() {
    redirect($_SERVER['HTTP_REFERER']);
}

function getHash(string $string): string {
    $salt1 = 'trgf746';
    $salt2 = 'p58fbnn28';
    return md5($salt1 . $string . $salt2);
}