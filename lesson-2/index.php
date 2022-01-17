<?php

// 1. Дана строка 'hello'. Сделайте из нее строку 'HELLO'.

$string = 'hello';
echo strtoupper($string) . PHP_EOL;
//

$stringHello = (strtoupper($string));
echo "{$stringHello}" . PHP_EOL;

// 2. Дана строка 'HELLO'. Сделайте из нее строку 'hello'.

$string = 'HELLO';
echo (strtolower($string)) . PHP_EOL;

//

$stringHello = strtolower($string);
echo "{$stringHello}" . PHP_EOL;
