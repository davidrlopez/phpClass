<?php

$array1 = [1,2,3,1,3,5];

function nArray($array, $n): bool
{
    $cont = 0;
    foreach ($array as $number) {
        if ($number == $n) {
            $cont++;
        }
    }
    return $cont > 1;
}

foreach ($array1 as $value) {
    if (nArray($array1, $value)) {
        echo "$value is repeated \n";
    }
}
