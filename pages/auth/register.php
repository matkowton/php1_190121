<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = $_POST['login'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];
    if ($password == $confirmPassword) {
        $userId = createUser($login, getHash($password));
        authByUserId($userId);
        redirect("/profile");
    }
}


echo render('register');