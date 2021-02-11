<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = $_POST['login'];
    $password = getHash($_POST['password']);

    if ($user = getUserByLoginPassword($login, $password)) {
        authByUserId($user['id']);
        redirect("/");
    } else {
        echo "Логин/пароль не верный!!!";
    }
}
echo render('login');