<?php

$host = 'mariadb';
$db   = 'app_db';
$user = 'app_user';
$pass = 'app_secret';

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$db;charset=utf8mb4",
        $user,
        $pass
    );

    echo "Verbindung zur MariaDB erfolgreich!";

} catch (PDOException $e) {
    echo "Datenbankfehler: " . $e->getMessage();
}
