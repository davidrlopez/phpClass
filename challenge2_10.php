<?php

function calcPrice(float $basePrice, string $tipoIva = 'general'): float
{
    $iva = match ($tipoIva) {
        'super' => 1.04,
        'reduced' => 1.1,
        default => 1.21
    };

    $ivaPrice = $basePrice * $iva;

    return $ivaPrice > 50 ? $ivaPrice + 8 : $ivaPrice;
}

echo calcPrice(40) . "\n";
echo calcPrice(40, 'reduced') . "\n";
echo calcPrice(400, 'reduced') . "\n";
echo calcPrice(400, 'super') . "\n";
