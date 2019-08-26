<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = 'database-webserver.cktfzuxhnk9x.us-west-2.rds.amazonaws.com';
//$host = 'mysql';
$port = '3306';
$db   = 'dxc';
$user = 'admin';
$pass = 'admin123';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;port=$port;dbname=$db;charset=$charset";
//$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$cover = "";
try {
     $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
     //throw new \PDOException($e->getMessage(), (int)$e->getCode());
    $cover = $e->getMessage(); 
}
