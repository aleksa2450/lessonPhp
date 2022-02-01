<?php
declare(strict_types=1);
error_reporting(-1);

/*
1. Выведите (через пробел) все четные
числа от a до b (включительно) (for).
 */

$a = 10;
$b = 30;

for ($i = $a; $i <= $b; $i++) {
    if ($i % 2 == 0) {
        echo $i . PHP_EOL;
    }
}

/*
2. Дан массив с числами.
Проверьте, есть ли в нем два одинаковых числа подряд.
Если есть - выведите 'да', а если нет - выведите 'нет'
*/

$a = [12, 12, 12, 11, 54, 64, 54];
$n = count($a);
for ($i = 1; $i <= $n; $i++) {
    if ($a[$i] == $a[$i - 1]) {
        echo "Да " . $a[$i] . " " . $a[$i - 1] . PHP_EOL;
    }
}

/*
3. Циклом for вывести цифры.

55555
44444
33333
22222
11111
*/

for ($i = 5; $i >= 1; $i--){
    for ($j = 1; $j <=5; $j++){
        echo $i;
    }
    echo PHP_EOL;
}

/*
4. Циклом for вывести цифры.

*******
*******
*******
*******
*******
*******
*******
*/

for ($i = 1; $i <= 7; $i++) {
    for ($j = 1; $j <= 7; $j++) {
        echo '*';
    }
    echo PHP_EOL;
}

/*
5. Нарисовать фигуру.

*
**
***
****
*****
******
*******
********
*********
 */

for ($i = 1; $i <= 9; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo '*';
    }
    echo PHP_EOL;
}
