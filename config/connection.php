<?php

$db_host = 'localhost';
$db_name = 'cashflow';
$db_user = 'root';
$db_password = '';
$db_charset = 'utf8';

// [
// 'db_options'  => [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
//     PDO::ATTR_DEFAULT_FETCH_MODE        => PDO::FETCH_ASSOC,
//     PDO::ATTR_EMULATE_PREPARES          => false],
// ]

require "crud.php";

$dsn = "mysql:host=" . $db_host . ";dbname=" . $db_name . ";charset=" . $db_charset;
$pdo = new PDO($dsn, $db_user, $db_password);
$db  = new Database($pdo);