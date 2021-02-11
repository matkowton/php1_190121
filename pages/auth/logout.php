<?php
include_once ENGINE_DIR . "base.php";

session_start();
$_SESSION['user_id'] = null;
session_destroy();
redirectToReferer();