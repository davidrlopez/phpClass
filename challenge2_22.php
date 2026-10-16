<?php

$numbers = [1,2,3,4,1,1,2,3,3,3];

$count = [];
foreach ($numbers as $number) {
    $count[$number] = ($count[$number] ?? 0) + 1;
}
foreach ($count as $count => $times) {
    echo "{$count} is repeated {$times}\n";
}
