<?php

$cals = [5,7,9,10,8];
$max = PHP_INT_MIN;
$min = PHP_INT_MAX;
$sum = 0;
$avg = 0;
foreach ($cals as $calif) {
    if ($calif > $max) {
        $max = $calif;
    }
    if ($calif < $min) {
        $min = $calif;
    }
    $sum += $calif;
    $avg = $sum / count($cals);
}
echo "min:$min  \nmax:$max  \navg:$avg  \n ";
