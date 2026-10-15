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

foreach ($teams as $team => $color) {
    echo "{$team} wears {$color}\n";
}
echo "***********PART B**************\n";

$colors = [];
foreach ($teams as $color) {
    $colors[$color] = ($colors[$color] ?? 0) + 1;
}
foreach ($colors as $color => $times) {
    echo "{$color} is worn {$times} times\n";
}
echo "***********PART C**************\n";

$teamsByColor = [];
foreach ($teams as $team => $color) {
    $teamsByColor[$color][] = $team;
}
foreach ($teamsByColor as $color => $names) {
    echo "{$color} is worn by " . implode(", ", $names) . "\n";
}
