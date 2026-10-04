<?php

$array1 = [1,2,3];
$array2 = [];

for ($i = count($array1) - 1; $i >= 0; $i--) {
    for ($j = 1; $j > 0; $j--) {
        echo  $array2[$j] = $array1[$i];
    }
}
