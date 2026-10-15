<?php

$array = [3,5,4,5,1,8,2,9,1];
$pos = 0;

for ($i = 0; $i < $i++; $i++) {
    $bulk = false;
    $pos++;
    if ($array[$i] > $array[$pos]) {
        $bulk = true;
        if ($bulk) {
            echo "{$array[$i]} is bulkiest";
        }
    }
}
