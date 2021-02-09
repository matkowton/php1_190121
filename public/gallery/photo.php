<?php
include_once __DIR__ . "/../config/main.php";
include_once ENGINE_DIR . "db.php";
include_once ENGINE_DIR . "gallery.php";

$id = (int) $_GET['id'];
if($image = getImageById($id)) {
  incrementImageViews($id);
}
include VIEWS_DIR . "gallery/photo.php";