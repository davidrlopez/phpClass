
<?php

function factorial(int $n): int
{
    if ($n < 0) {
        return 0;
    }

    $res = 1;
    $res = factorial($n - 1);
    $res = $res * $n;
    return $n === 1 ? 1 : $res;
}

echo factorial(5) . "\n";
