
<?php

function area($n1, $n2): float
{
    $area = $n1 * $n2;
    return abs($area);
}

function paint($area): float
{
    return $area * 4;
}
echo area(2, 2) . "\n";
echo paint(area: area(-2, 2)) . "\n";
