<?php

$teams = [
    "Patriots" => "Blue",
    "Vikings" => "Purple",
    "Rangers" => "Blue",
    "Ravens" => "Purple",
    "Texans" => "Red",
    "Rang" => "Red",
    "Ran" => "Red",
    "R" => "Blue",
];

foreach ($teams as $attribute => $value) {
    echo "{$attribute} wears {$value}\n";
}
echo"***********PART B**************\n";

$colors = [];
foreach ($teams as $attribute => $value) {
    if (isset($colors[$value])) {
        $colors[$value]++;
    } else {
        $colors[$value] = 1;
    }
}
foreach ($colors as $color => $times) {
    echo "{$color} is worn {$times} times\n";
}
echo"***********PART C**************\n";

$teamC = [];
$colors = [];
foreach ($teams as $attribute => $value) {
    if (!isset($teamC[$value])) {
        $teamC[$value] = [$attribute];
    } else {
        $teamC[$value][] = $attribute;
    }
}
foreach ($teamC as $color => $names) {
    echo "{$color} is worn by " . implode(", ", $names) . "\n";
}
