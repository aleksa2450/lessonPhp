<?php
declare(strict_types=1);
error_reporting(-1);
require 'function.php';

$getPage = getPage();

$perPage = 20;

$totalPage = totalPage($dbh);

$countPage = countPage($totalPage, $perPage);

CheckPageUrlId($getPage, $countPage);

$limit = ($getPage - 1) * $perPage;

$show = showList($dbh, $limit, $perPage);

$i = 1;

foreach ($show as $product) {
        echo '#' . $i . " " . $product['productName'] . "<br>";
        echo '----<br>';
        $i++;
}

if ($getPage != 1) {
    $prev = $getPage - 1;
    echo "<a href=\"?page={$prev}\" style=\"border:1px solid #ccc; padding:5px;\"> <<< </a> ";
}

for ($i = 1; $i <= countPage($totalPage, $perPage); $i++) {
    if ($getPage == $i) {
        $class = ' style="border:1px solid #ccc;font-weight:bold;color:red;padding:5px;"';
    } else {
        $class = ' style="border:1px solid #ccc;padding:5px"';
    }
    echo "<a href=\"?page={$i}\"{$class}>{$i}</a> ";
}

$prev = ($getPage != $countPage) ? $getPage + 1 : $getPage;
echo "<a href=\"?page={$prev}\" style=\"border:1px solid #ccc;padding:5px\"> >>> </a>";
echo '<div style="height:200px;"></div>';



