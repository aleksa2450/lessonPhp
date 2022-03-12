<?php

$dbh = new \PDO(
        "mysql:host=localhost;dbname=product;charset=utf8",
        'root',
        '', [
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
            \PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        ]
    );

function currentPage()
{
    $page = $_GET['page'] ?? 1;
    echo "страница {$page}" . PHP_EOL;
}
function getNumberOfRecordsFromDB($dbh)
{
    $sth = $dbh->prepare("SELECT id from product");
    $sth->execute();
    return $sth->rowCount();
}

function countPage($NumberOfRecordsFromDB, $perPage)
{
    return ceil($NumberOfRecordsFromDB / $perPage) ?: 1;
}

function getRecordsFromDB($limit, $perPage,$dbh)
{
    $sth = $dbh->prepare("SELECT * FROM post ORDER BY id DESC LIMIT {$limit}, {$perPage}");
    $sth->execute();
    return $sth->fetchAll();

}