<?php
declare(strict_types=1);
error_reporting(-1);

$dbh = new \PDO(
    'mysql:local=localhost;dbname=db-test;charset=utf8',
    'root',
    '', [
        \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
        \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
        \PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"
    ]
);

$filePath = __DIR__ . '/files/uploads.csv';

$sth = $dbh->prepare("SELECT * FROM products");
$sth->execute();
$result = $sth->fetchAll();

$handle = fopen($filePath, 'w');

foreach($result as $value) {
    fputcsv($handle, $value, ';', '"');
}

fclose($handle);

