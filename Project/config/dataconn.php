<?php
    session_start();
?>

<?php

$servername = "localhost";
$username =  "admin";
$password = "123";
$db = "crud";
$charset = "utf8mb4";
$dsn = "mysql:host=$servername;dbname=$db;charset=$charset";
$options = [

PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
PDO::ATTR_EMULATE_PREPARES => false,

];

try {
    $pdo = new PDO($dsn, $username, $password);
    //echo "Er is een db verbinding gemaakt!<br><br>";
    } catch (\PDOException $e) {
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
        echo "Er is geen database verbinding mogelijk";
    }
?>