<?php

$array1 = [1,2,3,1,3,5,1,2,1,4,3];

function isBulkiest($array, $i): bool
{
    return isset($array[$i + 1]) && $array[$i] > $array[$i + 1];
}


foreach ($array1 as $i => $value) {
    if (isBulkiest($array1, $i)) {
        echo "$value is Bulkiest \n";
    }
}
