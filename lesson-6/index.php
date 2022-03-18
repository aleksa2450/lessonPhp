<?php
declare(strict_types=1);
error_reporting(-1);

$dbh = new mysqli('localhost', 'root', '', 'lesson-6');

if ($dbh->connect_errno) {
    die ('Не удалось открыть базу данных' . $dbh->connect_error);
}

$dbh->set_charset('utf8');

for ($i = 1; $i <= 100; $i++) {
    $title = "title {$i}";
    $content = "content {$i}";

    $query = "INSERT INTO posts SET title = '{$title}', content = '{$content}'";
    $dbh->query($query);
}