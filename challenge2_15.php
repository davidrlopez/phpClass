<?php

function pickDay()
{
    $pick = rand(1, 7);
    $days = [" ","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
    echo "Today is $days[$pick]" . PHP_EOL;
}
pickDay();
