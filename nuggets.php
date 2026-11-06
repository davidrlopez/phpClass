<?php

function nuggets($number)
{
    for ($cajas10 = 0; $cajas10 <= $number; $cajas10++) {
        for ($cajas7 = 0; $cajas7 <= $number; $cajas7++) {
            for ($cajas4 = 0; $cajas4 <= $number; $cajas4++) {
                if ($cajas10 * 10 + $cajas7 * 7 + $cajas4 * 4 == $number) {
                    return true;
                }
            }
        }
    }
    return false;
}
