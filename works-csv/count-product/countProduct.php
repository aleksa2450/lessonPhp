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

$count['100-5000'] = 0;
$count['5001-10000'] = 0;
$count['10001-15000'] = 0;
$count['15001-20000'] = 0;

while (false != ($buffer = fgetcsv($handle, 4096, ';'))) {

    if ($buffer[2] <= '5000') {
        $count['100-5000'] += 1;
    }
    if ($buffer[2] > '5000' and $buffer[2] <= '10000' ) {
        $count['5001-10000'] += 1;
    }
    if ($buffer[2] > '10000' and $buffer[2] <= '15000' ) {
        $count['10001-15000'] += 1;
    }
    if ($buffer[2] > '15000' and $buffer[2] <= '20000' ) {
        $count['15001-20000'] += 1;
    }
}

print_r($count);





