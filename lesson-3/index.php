<?php

/* 1. Создайте переменные $a=10, $b=2 и $c=5.
 Выведите на экран их сумму
*/

$a = 10;
$b = 2;
$c = 5;

echo $a + $b + $c . PHP_EOL;

/*
2. Создайте переменные $a=17 и $b=10.
Отнимите от $a переменную $b и результат присвойте переменной $c.
Затем создайте переменную $d, присвойте ей значение
7. Сложите переменные $c и $d, а результат запишите в переменную $result.
Выведите на экран значение переменной $result.
 */

$a = 17;
$b = 10;
$c = $a - $b;
$d = 7;
$result = $c + $d;

echo $result . PHP_EOL;

/*
3. Создайте переменные $text1='Привет, ' и $text2='Мир!'.
С помощью этих переменных и операции сложения строк выведите на экран фразу
 */

$text1 = 'Привет, ';
$text2 ='Мир!';
echo $text1 . $text2 . PHP_EOL;

/*
4. Создайте переменную $text и присвойте ей значение 'Hello world'.
 Обращаясь к отдельным символам этой строки выведите на экран символ 'H',
 символ 'e', символ 'l' и тд.
 */

$text = 'Hello world';

// 1 вариант

echo $text[0] . PHP_EOL;
echo $text[1] . PHP_EOL;
echo $text[2] . PHP_EOL;
echo $text[3] . PHP_EOL;
echo $text[4] . PHP_EOL;
echo $text[6] . PHP_EOL;
echo $text[7] . PHP_EOL;
echo $text[8] . PHP_EOL;
echo $text[9] . PHP_EOL;
echo $text[10] . PHP_EOL;

echo PHP_EOL;

// 2 вариант

$h = substr($text, 0, 1);
echo $h . PHP_EOL;

$e = substr($text, 1, 1);
echo $e . PHP_EOL;

$l = substr($text, 2, 1);
echo $l . PHP_EOL;

$o = substr($text, 4, 1);
echo $o . PHP_EOL;

echo PHP_EOL;

$w = substr($text, 6, 1);
echo $w . PHP_EOL;

$r = substr($text, 8, 1);
echo $r . PHP_EOL;

$d = substr($text, 10, 1);
echo $d . PHP_EOL;

/*
5. Дана произвольная строка, например, 'abcde'.
Поменяйте первую букву (то есть букву 'a') этой строки на '!'
 */

// 1 вариант

$text = 'abcde';
$string = substr_replace($text, '!', '0', '1');
echo $string . PHP_EOL;

/*
6. Создайте массив $a с элементами 2, 5, 3, 9.
 Умножьте первый элемент массива на второй, а третий элемент на четвертый.
 Результаты сложите, присвойте переменной $result.
 Выведите на экран значение этой переменной
 */

$a = [2, 5, 3, 9];

$res1 = $a[0] * $a[1];
$res2 = $a[2] * $a[3];

$result = $res1 + $res2;
echo $result . PHP_EOL;
