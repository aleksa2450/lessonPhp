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

if ($currentPage != 1) {
    $prev = $currentPage - 1;
    echo "<a href=\"?page={$prev}\" style=\"border:1px solid #ccc; padding:5px;\"> <<< </a> ";
}
for ($i = 1; $i <= $countPage; $i++) {
    if ($currentPage == $i) {
        $class = ' style="border:1px solid #ccc;font-weight:bold;color:red;padding:5px;"';
    } else {
        $class = ' style="border:1px solid #ccc;padding:5px"';
    }
    echo "<a href=\"?page={$i}\"{$class}>{$i}</a> ";
}
$prev = ($currentPage != $countPage) ? $currentPage + 1 : $currentPage;
echo "<a href=\"?page={$prev}\" style=\"border:1px solid #ccc;padding:5px\"> >>> </a>";
echo '<div style="height:200px;"></div>';




