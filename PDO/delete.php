<?php
declare(strict_types=1);
error_reporting(-1);

define('DSN', [
    'dsn' => 'mysql:localhost=localhost;dbname=pdo;charset=utf8',
    'username' => 'root',
    'password' => '',
]);

define('OPTIONS', [
    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
    \PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"
]);

try {
    $dbh = new \PDO(
        DSN['dsn'],
        DSN['username'],
        DSN['password'],
        OPTIONS
    );
} catch(\PDOException $e) {
    echo $e->getMessage();
}

$sth = $dbh->prepare("DELETE FROM products WHERE price != 0");
$sth->execute();
