<?php

function factorial(int $n): int
{
    if ($n < 0) {
        return 0;
    }

    $res = 1;
    for ($i = 2; $i <= $n; $i++) {
        $res *= $i;
    }
    return $res;
}

echo factorial(5);
