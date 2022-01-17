<?php

// 1 ЗАДАНИЕ: дана строка 'hello'. Сделайте из нее строку 'HELLO'.

$stringOne = 'hello';

// 1 вариант

echo strtoupper($stringOne) . PHP_EOL;

// 2 вариант

$stringHello = (strtoupper($stringOne));
echo "{$stringHello}" . PHP_EOL;

// 2 ЗАДАНИЕ: дана строка 'HELLO'. Сделайте из нее строку 'hello'.

$stringTwo = 'HELLO';
// 1 вариант

echo (strtolower($stringTwo)) . PHP_EOL;

// 2 вариант

$stringHello = strtolower($stringTwo);
echo "{$stringHello}" . PHP_EOL;

//3 ЗАДАНИЕ: дана строка 'hello'. Сделайте из нее строку 'Hello'.

$string = 'hello';

// 1 вариант

$stringH =  ucfirst($string);
echo "{$stringH}" . PHP_EOL;

// 2 вариант

echo ucfirst($string) . PHP_EOL;

// 4 ЗАДАНИЕ: дана строка 'Hello'. Сделайте из нее строку 'hello'.
$string = 'Hello1';

//1 вариант

$strh = lcfirst($string);
echo "{$strh}" . PHP_EOL;

//2 вариант

echo lcfirst($string) . PHP_EOL;

/*
5.
Дана строка 'i am learning programming'.
Сделайте из нее строку 'I am learning programming'
*/

$string = 'i am learning programming' . PHP_EOL;
echo ucfirst($string);

//

$strI = ucfirst($string);
echo "{$strI}";


