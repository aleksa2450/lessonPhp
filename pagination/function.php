<?php
declare(strict_types=1);
error_reporting(-1);

function currentPage()
{
   return $page = $_GET['page'] ?? 1;
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

function getRecordsFromDB($dbh, $limit, $perPage)
{
    $sth = $dbh->prepare("SELECT product_name FROM product LIMIT {$limit}, {$perPage}");
    $sth->execute();
    return $sth->fetchAll();
}

function displayRecordsFromDB($RecordsFromDB)
{
    $i = 1;
    foreach ($RecordsFromDB as $value) {
        echo "# {$i} {$value['product_name']} <br>";
        echo '------<br>';
        $i++;
    }
}