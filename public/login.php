<?php
include_once __DIR__ . "/../config/main.php";
include_once ENGINE_DIR . "base.php";
include_once ENGINE_DIR . "users.php";
include_once ENGINE_DIR . "menu.php";
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = $_POST['login'];
    $password = getHash($_POST['password']);

    if ($user = getUserByLoginPassword($login, $password)) {
      //  setcookie('user_id', $user['id']);
        $_SESSION['user_id'] = $user['id'];
        redirect("/");
    } else {
        echo "Логин/пароль не верный!!!";
    }
}
?>
<form action="" method="post">
    <input type="text" name="login">
    <input type="password" name="password">
    <input type="submit" value="Войти">
</form>
