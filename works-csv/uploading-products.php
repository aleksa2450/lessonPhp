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

$sth = $dbh->prepare("SELECT * FROM products");
$sth->execute();
$products = $sth->fetchAll();

$filePath = __DIR__ . '/uploading-products.csv';

$handle = fopen($filePath, 'w');

foreach ($products as $value) {
    fputcsv($handle, $value, ';', '"');
}
fclose($handle);
