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