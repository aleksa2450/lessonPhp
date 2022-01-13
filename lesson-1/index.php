<?php
declare(strict_types=1);
error_reporting(-1);

/*
1.
Обмен значениями между двумя переменными
Даны значения двух переменных a и b.
Требуется произвести взаимный обмен их значений.
*/

$a = 10;
$b = 20;

$a = $a + $b;
$b = $a - $b;
$a = $a - $b;

echo "a = {$a}, b = {$b}\n";

/*
2.
Требуется составить программу, после выполнения которой переменная b будет иметь
значение переменной а, переменная с — значение переменной b, а переменная а — значение переменной с.
Дополнительные переменные не применять.
*/

$a = 6;
$b = 8;
$c = 9;
echo "a = {$a}, b = {$b}, c = {$c}\n";

$a = $a + $b + $c;
$b = $a - $b - $c;
$c = $a - $b - $c;
$a = $a - $b - $c;

echo "a = {$a}, b = {$b}, c = {$c}\n";

/*
3.
Написать небольшую программу, где создаются переменные
всех простых типов, и далее их значения выводятся на экран.
 */

$a = "какой-то текст";
$b = 10;
$c = 10.1;
$d = true;
$arr[] = 100;
$e = (object)"это объект";

echo $arr[0]."</br>\n";
echo $a."</br>\n";
echo $b."</br>\n";
echo $c."</br>\n";
echo $d."</br>\n";
echo $e -> scalar;

//4 Сомнения в правильности выполнения(не хватает подробностей)

$st = "1231Строка";
$boo = true;
$bo = "0";

//var_dump в этом задании для самоконтроля

settype($st, "integer");
var_dump($st);
settype($st, "float");
var_dump($st);
settype($boo, "string");
var_dump($boo);
settype($boo, "object");
var_dump($boo);
settype($st, "array");
var_dump($st);
settype($bo, "boolean");
var_dump($bo);

/*
5.
Написать программу выводящую типы переменных.
 */

$a1 = "какой-то текст";
$b2 = 10;
$c3 = 10.1;
$d3 = true;
$arr4[] = 100;
$e5 = new stdClass;
$j4 = null;

echo "</br>" . gettype($a1);
echo "</br>" . gettype($b2);
echo "</br>" . gettype($c3);
echo "</br>" . gettype($d3);
echo "</br>" . gettype($arr4);
echo "</br>" . gettype($j4);
echo "</br>" . gettype($e5);

