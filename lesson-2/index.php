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
Сделайте из нее строку 'I am Learning Programming'
*/

$string = 'i am learning programming' . PHP_EOL;
echo ucwords($string);

//

$strI = ucwords($string);
echo "{$strI}" . PHP_EOL;

/*
6.
Дана строка 'HELLO'.
Сделайте из нее строку 'Hello'.
*/

$string = 'HELLO';
echo ucfirst(strtolower($string)) . PHP_EOL;
/*
7.
Дана строка 'html css php js'.
Найдите количество символов в этой строке.
*/

$string = 'html css php js';
echo "Кол-во символов в строке включая пробелы =" . strlen($string) . PHP_EOL;

/*
8.
Дана строка 'html css php js'. Вырежьте из нее и выведите
на экран слово 'html', слово 'css' и слово 'php', и 'js'.
 */

$string = 'html css php js';
$strResult = explode(" ", $string);

echo $strResult[0] . PHP_EOL;
echo $strResult[1] . PHP_EOL;
echo $strResult[2] . PHP_EOL;
echo $strResult[3] . PHP_EOL;

/*
9.
Дана строка. Вырежите и выведите на экран последние
3 символа этой строки. $string = '123456789'
 */

$string = '123456789';
echo substr($string, -3) . PHP_EOL;