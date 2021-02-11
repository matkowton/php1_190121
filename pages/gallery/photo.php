<?php
$id = (int) $_GET['id'];
if($image = getImageById($id)) {
  incrementImageViews($id);
}
include VIEWS_DIR . "gallery/photo.php";