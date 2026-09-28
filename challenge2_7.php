<?php

header('Content-Type: text/plain');

function pyramid0(): void
{
    for ($i = 0; $i < 7; $i++) {
        for ($j = 0; $j <= $i; $j++) {
            echo "*";
        }
        echo "\n";
    }
}

function pyramid1(): void
{
    for ($i = 7; $i >= 0; $i--) {
        for ($j = 0; $j < $i; $j++) {
            echo "*";
        }
        echo "\n";
    }
}

function pyramid3(): void
{
    pyramid0();
    pyramid1();
}

function pyramid4(): void
{
    $height = 8;

    for ($i = 0; $i < $height; $i++) {
        for ($s = 0; $s < $height - $i - 1; $s++) {
            echo " ";
        }
        for ($j = 0; $j < 2 * $i + 1; $j++) {
            echo "*";
        }
        echo "\n";
    }
}

pyramid0();
echo"\n";
pyramid1();
echo"\n";
pyramid3();
pyramid4();
