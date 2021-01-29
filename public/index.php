<?php
include_once __DIR__ . "/../config/main.php";
include ENGINE_DIR . "render.php";
include ENGINE_DIR . "menu.php";
/*
$f = fopen("test.txt", "w+");
foreach ($menu as $item) {
    fputs($f, $item . "\n");
}
fclose($f);
*/
/*
$menu = [];
$f = fopen("test.txt", "a+");
while($string = fgets($f)) {
    $menu[] = $string;
}
fclose($f);
*/

/*
echo file_get_contents("http://yandex.ru");
*/
/*
$dir = opendir(ROOT_DIR);
while($element = readdir($dir)) {
    if(is_dir(ROOT_DIR . "/" . $element)) {
        echo "<b>$element</b> <br>";
    }else {
        echo "$element <br>";
    }

}
closedir($dir);


$dir = scandir(ROOT_DIR);
var_dump($dir);
*/

$menu = getMenu();
drawMenu($menu);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

</body>
</html>
