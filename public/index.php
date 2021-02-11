<?php
include_once __DIR__ . "/../config/main.php";
include ENGINE_DIR . "autoload.php";
session_start();

//controller/action
//basket
if(!$requestUri = preg_replace(['#^/#','#[?].*#','#/$#'],"",  $_SERVER['REQUEST_URI'])){
    $requestUri = DEFAULT_CONTROLLER;
}

$parts = explode("/", $requestUri);
$page = $parts[0];
$action = $parts[1] ?? DEFAULT_ACTION;
$scriptName = PAGES_DIR . $page . "/" . $action . ".php";
include $scriptName;