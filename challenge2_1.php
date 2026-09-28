<?php

$n1 = 1;
$n2 = 2;
$n3 = -1;
$n4 = -2;

function compare($n1, $n2)
{
    if ($n1 > 0) {
        echo "$n1 is positive" . PHP_EOL;
    }
    if ($n2 > 0) {
        echo "$n2 is positive" . PHP_EOL;
    }
    if ($n1 > $n2) {
        echo "$n1 is bigger than $n2" . PHP_EOL;
    } else {
             echo "$n2 is bigger than $n1" . PHP_EOL;
    }
    if ($n1 < 0 && $n2 < 0) {
        echo "$n1 $n2 both negative" . PHP_EOL;
    }
    if ($n1 > $n2) {
            echo "$n1 is bigger than $n2" . PHP_EOL;
    } elseif ($n2 > $n1) {
            echo "$n2 is bigger than $n1" . PHP_EOL;
    } else {
            echo "$n1 and $n2 are equal" . PHP_EOL;
    }
}

compare($n1, $n2);
compare($n3, $n4);
compare($n1, $n4);
compare(5, 5);
