<?php

function area($n1, $n2): float
{
    $area = $n1 * $n2;
    return $area < 0 ? 0 : $area;
}
echo area(2, 2) . "\n";
echo area(4, 5) . "\n";
