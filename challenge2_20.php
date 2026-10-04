<?php

$array1 = [1,2,3,1,3,5,4,3,7,2,6];

function nArray($array, $n)
{
    for ($i = $n + 1; $i < count($array); $i++) {
        if ($array[$i] > $n) {
            return false;
        }
    }
    return true;
}

foreach ($array1 as $value) {
    if (nArray($array1, $value)) {
        echo "$value is BULKIEST \n";
    }
}
