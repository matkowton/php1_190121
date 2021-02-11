<?php
include_once ENGINE_DIR . "db.php";

function getUserByLoginPassword(string $login, string $password) {
    $sql = "SELECT * FROM users 
                WHERE login = '{$login}'
                AND password = '{$password}'";
    return queryOne($sql);
}

function getUserById(int $id) {
    return queryOne(
        "SELECT * FROM users WHERE id = {$id}"
    );
}

function createUser(string $login, string $passwordHash): ?int {
    $sql = "INSERT INTO users (login, password) VALUES ('{$login}','{$passwordHash}')";
    if(execute($sql)) {
        return getLastInsertId();
    }
    return null;
}