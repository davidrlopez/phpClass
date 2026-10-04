
<?php

$guess = 3;
$try = 0;

do {
    $try = rand(1, 10);
    if ($try === $guess) {
        echo "Correct" . "\n";
        break;
    }
    echo $try > $guess ? "Too high" . "\n" : "Too low" . "\n";
} while ($try !== $guess);
