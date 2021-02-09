<?php
include_once __DIR__ . "/../config/main.php";
include_once ENGINE_DIR . "db.php";
include_once ENGINE_DIR . "gallery.php";
include_once ENGINE_DIR . "filesystem.php";

if($_SERVER['REQUEST_METHOD'] == "POST"){
    uploadFile('gallery_image', PUBLIC_DIR . "img");
    $name = $_FILES['gallery_image']['name'];
    createImage($name, $name);
    header("Location: /gallery.php");
}

$images = getGalleryImages();
include VIEWS_DIR . "gallery/gallery.php";
?>


