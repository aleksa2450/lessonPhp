<?php

// 1. Дана строка 'hello'. Сделайте из нее строку 'HELLO'.

$stringOne = 'hello';
echo strtoupper($stringOne) . PHP_EOL;
//

$stringHello = (strtoupper($stringOne));
echo "{$stringHello}" . PHP_EOL;

// 2. Дана строка 'HELLO'. Сделайте из нее строку 'hello'.

$stringTwo = 'HELLO';
echo (strtolower($stringTwo)) . PHP_EOL;

//

$stringHello = strtolower($stringTwo);
echo "{$stringHello}" . PHP_EOL;

//3. Дана строка 'hello'. Сделайте из нее строку 'Hello'.

$string = 'hello';
$stringH =  ucfirst($string);
echo "{$stringH}" . PHP_EOL;

//

echo ucfirst($string) . PHP_EOL;

//
