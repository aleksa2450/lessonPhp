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
var_dump($strResult);
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

//10.
//Дана строка '01.01.2022'. Замените все точки на дефисы

$string = '01.01.2022';
echo str_replace('.', '-', $string) . PHP_EOL;

/*
11.
Дана строка 'html css php js'.
Запишите каждое слово этой строки в отдельный элемент массива.
 */

$string = 'html css php js';
$stringRes = str_split($string, 4);
print_r($stringRes);

/*
12.
Дан массив с элементами 'html', 'css', 'php',
'js'. Создайте строку из этих элементов, разделенных запятыми.
 */

$a = ['html', 'css', 'php'];

print_r(implode(', ', $a)) . PHP_EOL;

/*
14.
Дана строка '1234567890'.
Разбейте ее на массив с элементами '12', '34', '56', '78', '90'
 */

$string = '1234567890';
print_r(str_split($string, 2)) . PHP_EOL;

/*
15.
Дана строка '1234567890'. Разбейте ее на массив с элементами
'1', '2', '3', '4', '5', '6', '7', '8', '9', '0'.
 */

$string = '1234567890';
print_r(str_split($string));

//Массивы

/*
1.
Дан массив $array = [1, 2, 3, 4, 5].
Подсчитайте количество элементов этого массива.
 */

$a = [1, 2, 3, "hello", 5];
echo "Количество элементов в массиве a = " .  count($a) . PHP_EOL;

/*
2. Дан массив $array = [1, 2, 3, 4, 5].
 С помощью функции count выведите последний элемент данного массива
 */

$array = [1, 2, 3, 4, 5,];

echo $array[count($array) - 1] . PHP_EOL;

//3. Создайте массив, заполненный числами от 1 до 100.

$a = range(1, 100);
print_r($a) ;

//4. Создайте массив, заполненный буквами от 'a' до 'z'.

$a = range('a', 'z');
print_r($a);

/*
5.
Дан массив $array = [1, 2, 3, 4, 5] с числами.
Проверьте, что в нем есть элемент со значением 3
*/

$array = [1, 2, 3, 4, 5];

var_dump(in_array(5, $array));
/*
$index = true;
if (in_array($index, $array)) {
    $n = array_search($index, $array);
    echo $n;
} else {
  echo "gdfgfd";
}
*/

/*6.
Дан массив [1, 2, 3, 4, 5].
Найдите сумму элементов данного массива
*/

$array = [1, 2, 3, 4, 5];
echo "Сумма элементов массива(a) = " . array_sum($array) . PHP_EOL;

/*
7.
Дан массив [1, 2, 3, 4, 5].
Найдите произведение (умножение) элементов данного массива
 */

$array = [1, 2, 3, 4, 5];
$arrayProduct = array_product($array);
echo "произведение элементов массива(array) = " . $arrayProduct . PHP_EOL;

/*
8.
Дан массив $arr. С помощью функций array_sum и count
 найдите среднее арифметическое элементов
 */

$arr = [1, 2, 3, 4, 5];// сред арифм = 3

$arrSum = array_sum($arr);
$n = count($arr);
//var_dump($n);
$srAr = $arrSum / $n;

echo $srAr . PHP_EOL;

echo "ср ар = " . array_sum($arr) / count($arr) . PHP_EOL;

echo " = " . intdiv($arrSum, $n) . PHP_EOL;

/*
9.
Создайте строку '1-2-3-4-5-6-7-8-9' не используя цикл
*/

//1 вариант с массивом
$a = [1, 2, 3, 4, 5, 6, 7, 8, 9];
echo implode("-", $a) . PHP_EOL;

//2 вариант со строкой
$a = '123456789';
echo implode('-', str_split($a)) . PHP_EOL;// Почему в этом случае строка приравнялась к массиву;

//10. Найдите сумму чисел от 1 до 100 не используя цикл

$a = array_sum(range(1,100));
//var_dump($a);

$arrayRange = range(1,100);
$arraySum = array_sum($arrayRange);
echo $arraySum . PHP_EOL;

/*
11.
Дан массив с элементами 1, 2, 3, 4, 5. Создайте из него массив
$result с элементами 2, 3, 4, найти функцию которая это может сделать.
 */

$array = [1, 2, 3, 4, 5];
$result = array_slice($array, 1, 3);
//var_dump($result);
print_r($result);

/*
12.
Дан массив 'a'=>1, 'b'=>2, 'c'=>3.
Поменяйте в нем местами ключи и значения.
найти функцию которая это может сделать.
 */

$array = ['a' => 1, 'b' => 2, 'c' => 3];
print_r(array_flip($array));

/*13.
Дан массив с элементами 1, 2, 3, 4, 5.
Сделайте из него массив с элементами 5, 4, 3, 2, 1.
найти функцию которая это может сделать.
*/

$a = [1, 2, 3, 4, 5];
print_r(array_reverse($a));

/*
14.
Заполните массив числами от 1 до 25 с помощью range,
а затем перемешайте его элементы в случайном порядке.
найти функцию которая это может сделать.
 */

$a = range(1, 25);
var_dump(shuffle($a)) ;
print_r(shuffle($a)) ; //сортирует массив но выводит true или false, других функций не нашёл

/*
15.
15. Создайте массив, заполненный буквами от 'a' до 'z' так,
 чтобы буквы шли в случайном порядке и не повторялись.
 найти функцию которая это может сделать.
 */
$arr = (range('a', 'z'));

shuffle($arr);

/*
   foreach ($arr as $value) {
    echo $value . " ";
}
 */




