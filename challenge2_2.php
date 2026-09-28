<?php

function compare(int $a, int $b)
{
    if ($a > 0) {
        echo "$a is positive\n";
    }
    if ($b > 0) {
        echo "$b is positive\n";
    }
    if ($a < 0 && $b < 0) {
        echo "$a $b both negative\n";
    }

    if ($a === $b) {
        echo "$a and $b are equal\n";
    } elseif ($a > $b) {
        echo "$a is bigger than $b\n";
    } else {
        echo "$b is bigger than $a\n";
    }
}

compare(1, 2);
compare(-1, -2);
compare(1, -2);
compare(5, 5);
