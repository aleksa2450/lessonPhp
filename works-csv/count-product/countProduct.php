<?php
declare(strict_types=1);
error_reporting(-1);

$dbh = new \PDO(
    "mysql:local=localhost;dbname=db-test;charset=utf8",
    'root',
    '', [
        \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
        \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
        \PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"
    ]
);

$filePath = __DIR__ . '/updating-products.csv';

$handle = fopen($filePath, 'rb') or die($php_errormsg);

$a = [];


while (false != ($buffer = fgetcsv($handle, 4096, ';'))) {
    print_r($buffer[2]);
/*    if ($buffer[2] < 5000) {
        $a['sum5000'] =
    }*/


    print_r($buffer);
}

