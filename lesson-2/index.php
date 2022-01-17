<?php

// 1. Дана строка 'hello'. Сделайте из нее строку 'HELLO'.

$stringOne = 'hello';

// 1 вариант

echo strtoupper($stringOne) . PHP_EOL;

// 2 вариант

$stringHello = (strtoupper($stringOne));
echo "{$stringHello}" . PHP_EOL;

// 2. Дана строка 'HELLO'. Сделайте из нее строку 'hello'.

$stringTwo = 'HELLO';
// 1 вариант

echo (strtolower($stringTwo)) . PHP_EOL;

// 2 вариант

$stringHello = strtolower($stringTwo);
echo "{$stringHello}" . PHP_EOL;

//3. Дана строка 'hello'. Сделайте из нее строку 'Hello'.

$string = 'hello';

// 1 вариант

$stringH =  ucfirst($string);
echo "{$stringH}" . PHP_EOL;

// 2 вариант

echo ucfirst($string) . PHP_EOL;

//Дана строка 'Hello'. Сделайте из нее строку 'hello'.
$string = 'Hello1';

//1 вариант

$strh = lcfirst($string);
echo "{$strh}" . PHP_EOL;

//2 вариант

echo lcfirst($string) . PHP_EOL;