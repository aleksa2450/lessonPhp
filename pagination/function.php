<?php

$dbh = new \PDO(
    "mysql:host=localhost;dbname=pagination;charset=utf8",
    'root',
    '', [
        \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
        \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
        \PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'",
    ]
);

function getPage()
{
   return $page = $_GET['page'] ?? 1;
}

function countPage($totalPage, $perPage)
{
    return $countPage = ceil($totalPage / $perPage) ?: 1;
}

function CheckPageUrlId($page, $countPage)
{
    if ($page > $countPage) {
        $page = $countPage;
    }
    return $page;
}

function totalPage($dbh)
{
    $sth = $dbh->prepare('SELECT id FROM products LIMIT 2000');
    $sth->execute();
    return $sth->rowCount();
}

function showList($dbh, $limit, $perPage)
{
    $sth = $dbh->prepare(
        "SELECT productName FROM products LIMIT {$limit}, {$perPage}"
    );
    $sth->execute();
    return $result = $sth->fetchAll();
}
