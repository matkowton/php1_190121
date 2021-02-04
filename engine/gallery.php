<?php


function getGalleryImages() {
    return queryAll("SELECT * FROM images ORDER BY views DESC");
}

function getImageById(int $id) {
    return queryOne("SELECT * FROM images WHERE id = {$id}");
}

function incrementImageViews(int $id) {
    return execute("UPDATE images SET views = views + 1 WHERE id = {$id}");
}

function createImage(string $title, string $path) {
    $sql = "INSERT INTO images (title, path) VALUES ('{$title}', '{$path}')";
    return execute($sql);
}