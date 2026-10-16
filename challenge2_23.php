<?php

$champions = [
    "Real Madrid" => 15,
    "Barcelona" => 5,
    "AC Milan" => 5,
    "Porto" => 1,
];

$teamName  = readline("Enter team name: ");
echo ($champions[$teamName] ?? 0) ? $champions[$teamName] : "No champions";
