<?php
declare(strict_types=1);
error_reporting(-1);
require __DIR__  . '/function.php';

$currentPage = currentPage();
$perPage = 20; // Кол-во записей на странице

$NumberOfRecordsFromDB = getNumberOfRecordsFromDB($dbh);

$countPage = countPage($NumberOfRecordsFromDB, $perPage);
echo $countPage;

if ($currentPage > $countPage) {
    $currentPage = $countPage;
}

$limit = ($currentPage - 1) * $perPage;
$RecordsFromDB = getRecordsFromDB($limit, $perPage, $dbh);
print_r($RecordsFromDB);
die;

$i = 1;

foreach ($result as $value) {
    echo "# {$i} {$value['product_name']}" . "<br>";
    echo '------<br>';
    $i++;
}

if ($page != 1) {
    $prev = $page - 1;
    echo "<a href=\"?page={$prev}\" style=\"border:1px solid #ccc; padding:5px;\"> <<< </a> ";
}
for ($i = 1; $i <= $countPage; $i++) {
    if ($page == $i) {
        $class = ' style="border:1px solid #ccc;font-weight:bold;color:red;padding:5px;"';
    } else {
        $class = ' style="border:1px solid #ccc;padding:5px"';
    }
    echo "<a href=\"?page={$i}\"{$class}>{$i}</a> ";
}
$prev = ($page != $countPage) ? $page + 1 : $page;
echo "<a href=\"?page={$prev}\" style=\"border:1px solid #ccc;padding:5px\"> >>> </a>";
echo '<div style="height:200px;"></div>';




