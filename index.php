<?php
declare(strict_types=1);
error_reporting(-1);

$a = [3, 1, 2, 5, 4, ];

$b = [2, ];
function bubbleSort(array $a) : array
{
    $count = count($a);

    if ($count <= 1) {
        return $a;
    }

    for ($i = 0; $i < $count; $i++) {
        for ($j = ($count - 1); $j > $i; $j--) {
            if ($a[$j] < $a[$j - 1]) {
                $tmpVar = $a[$j];
                $a[$j] = $a[$j - 1];
                $a[$j - 1] = $tmpVar;
            }
        }
    }
    return $a;
}

print_r(bubbleSort($a));

function insertSort(array $a) : array
{
    $count = count($a);

    if ($count <= 1) {
        return $a;
    }

    for ($i = 1; $i < $count; $i++) {
        $tmpVar = $a[$i];
        $j = $i - 1;

        while (isset($a[$j]) && $a[$j] > $tmpVar) {
            $a[$j + 1] = $a[$j];
            $a[$j] = $tmpVar;
            $j--;
        }
    }
    return $a;
}
print_r(insertSort($a));