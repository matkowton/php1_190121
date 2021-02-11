<?php
include_once ENGINE_DIR . "menu.php";
include_once ENGINE_DIR . "auth.php";

function renderTemplate(string $templateName, array $params = []): string
{

    extract(prepareViewParams());
    extract($params);
    ob_start();
    include VIEWS_DIR . $templateName . ".php";
    return ob_get_clean();
}

function render (string $template, array $params = [], $useLayout = true) {
    $content = renderTemplate($template, $params);
    if($useLayout) {
        return renderTemplate('layouts/main', ['content' => $content]);
    }
    return $content;
}

function prepareViewParams()
{
    $menuAccessLevel = [0];
    if ($user = getCurrentUser()) {
        $menuAccessLevel[] = 2;
    } else {
        $menuAccessLevel[] = 1;
    }
    $menu = getMenu($menuAccessLevel);
    return ['menu' => $menu, 'user' => $user];
}