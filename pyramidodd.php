<?php

$numFilas = 5;

for ($row = 1; $row < $numFilas; $row++) {
    if ($row % 2 == 0) {
        $inicio = 2;
    } else {
        $inicio = 1;
    }
    for ($j = 0; $j < $row; $j++) {
        echo 2 * $j * $inicio;
    }
    echo "<br>";
}
