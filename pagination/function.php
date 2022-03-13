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

function showNavigatingPages($currentPage, $countPage)
{
    //Левая стрелка
    if ($currentPage != 1) {
        $prev = $currentPage - 1;
        echo "<a href=\"?page={$prev}\" style=\"border:1px solid #ccc; padding:5px;\"> <<< </a> ";
    }
    //отображение цифр
    for ($i = 1; $i <= $countPage; $i++) {
        if ($currentPage == $i) {
            $class = ' style="border:1px solid #ccc;font-weight:bold;color:red;padding:5px;"';
        } else {
            $class = ' style="border:1px solid #ccc;padding:5px"';
        }
        echo "<a href=\"?page={$i}\"{$class}>{$i}</a> ";
    }
    //правая стрелка
    $prev = ($currentPage != $countPage) ? $currentPage + 1 : $currentPage;
    echo "<a href=\"?page={$prev}\" style=\"border:1px solid #ccc;padding:5px\"> >>> </a>";
    echo '<div style="height:200px;"></div>';
}