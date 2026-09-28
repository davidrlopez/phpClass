<?php

for ($i = 0; $i <= 10; $i++) {
    echo "7x + $i = $i*7\n";
}
for ($x = 0; $x <= 10; $x++) {
    echo "************\n";
    for ($j = 0; $j <= 10; $j++) {
        echo "$x x $j = " . ($x * $j) . "\n";
    }
}
