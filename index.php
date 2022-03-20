<?php
declare(strict_types=1);
error_reporting(-1);

$dbh = new \PDO(
    'mysql:local=localhost;dbname=db-test;charset=utf8',
    'root',
    '', [
        \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
        \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
        \PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"
    ]
);

$filePath = __DIR__ . '/files/uploads.csv';

$handle = fopen($filePath, 'rb') or die ($php_errormsg);

while (false != ($buffer = fgetcsv($handle, 4096, ';'))) {
    $query = "SELECT id, title, price, quantity FROM products WHERE id =:id";
    $sth = $dbh->prepare($query);
    $sth->execute([":id" => $buffer[0]]);
    $product = $sth->fetch();

    $productCount = count($product);
    $i = 0;

    foreach ($product as $key => $value) {
        if ($value != $buffer[$i]) {
           $query = "UPDATE products SET {$key} =:{$key} WHERE id=:id";
           $sth = $dbh->prepare($query);
           $sth->execute([":{$key}" => $buffer[$i], ':id' => $buffer[0]]);
        }
        $i++;
    }
    //print_r($productDB);
    //print_r($buffer);
}


//Файл содер. 100 товаров (title, price=(100,20000))
//цикл в кот. посчитать все товары по группам от 100 до 5000, от 5000 до 10000 и тд...
//Массив где ключи: sum ot 100 do 5000 и тд
//Папка count-product// csv.файл, countProduct.php


//заполнение БД
/*
for ($i = 1; $i <= 100; $i++) {
    $title = 'product ';
    $price = mt_rand(100, 20000);
    $quantity = mt_rand(1, 10);
    $query = "INSERT INTO `products-co` SET title=:title, price =:price, quantity =:quantity";
    $sth = $dbh->prepare($query);
    $sth->execute([':title' => $title, ':price' => $price, ':quantity' => $quantity]);
}*/

// Запись в csv файл
/*
$sth = $dbh->prepare("SELECT * FROM `products-co`");
$sth->execute();
$product = $sth->fetchAll();

foreach ($product as $value) {
    fputcsv($handle, $value, ';', '"');
}
 */


/* $query = "SELECT title, price FROM `products-co` WHERE id=:id";
 $sth = $dbh->prepare($query);
 $sth->execute([":id" => $buffer[0]]);
 $product = $sth->fetch();*/