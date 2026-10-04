<?php

$array = [1, 2, 5,7,9];

function nArray($array, $n): bool
{
    $isHere = false;
    $pos = 0;
    foreach ($array as $number) {
        $pos++;
        $number == $n ? $isHere = true : $isHere = false;
        if ($isHere) {
            echo "$n is in the array at pos:$pos \n";
        }
    }
    return $isHere;
}
nArray($array, 2);
nArray($array, 7);
