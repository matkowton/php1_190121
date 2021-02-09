<?php
include_once ENGINE_DIR . "db.php";

function getMenu(): array
{
   return queryAll( "SELECT * FROM menu ORDER BY `order`");
}