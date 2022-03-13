<?php
declare(strict_types=1);
error_reporting(-1);
require __DIR__  . '/function.php';

$dbh = new \PDO(
    "mysql:host=localhost;dbname=product;charset=utf8",
    'root',
    '', [
        \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
        \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
        \PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
    ]
);

$currentPage = currentPage();
$perPage = 20; // Кол-во записей на странице

$NumberOfRecordsFromDB = getNumberOfRecordsFromDB($dbh);

$countPage = countPage($NumberOfRecordsFromDB, $perPage);

if ($currentPage > $countPage) {
    $currentPage = $countPage;
}

$limit = ($currentPage - 1) * $perPage;

$RecordsFromDB = getRecordsFromDB($dbh, $limit, $perPage);

displayRecordsFromDB($RecordsFromDB);

showNavigatingPages($currentPage, $countPage);


