<?php
include_once __DIR__ . "/../config/main.php";

function getConnection() {
    static $connection = null;
    if(is_null($connection)) {
        $config = include CONFIG_DIR . "db.php";
        $connection = mysqli_connect(
            $config['host'],
            $config['login'],
            $config['password'],
            $config['dbName'],
        );
    }
    return $connection;
}

function queryAll(string $sql) {
    $res = mysqli_query(getConnection(), $sql);
    return mysqli_fetch_all($res, MYSQLI_ASSOC);
}

function queryOne(string $sql) {
    return queryAll($sql)[0];
}

function execute(string $sql) {
    return mysqli_query(getConnection(), $sql);
}
