<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){
    uploadFile('gallery_image', PUBLIC_DIR . "img");
    $name = $_FILES['gallery_image']['name'];
    createImage($name, $name);
    header("Location: /gallery.php");
}

$images = getGalleryImages();
include VIEWS_DIR . "gallery/gallery.php";
?>


