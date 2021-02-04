<?php
include ENGINE_DIR . "db.php";

function getMenu(): array
{
   return queryAll( "SELECT * FROM menu WHERE access = 1");
}