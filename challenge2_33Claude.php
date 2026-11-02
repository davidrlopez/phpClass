<?php

class Product
{
    protected $name;
    protected $basePrice;
    protected $discount = 0;
    protected $extraCost = 0;

    public function __construct($name, $basePrice)
    {
        $this->name = $name;
        $this->basePrice = $basePrice;
    }

    public function calcPrice()
    {
        return $this->basePrice * (1 - $this->discount) + $this->extraCost;
    }
}

class Physical extends Product
{
    protected $extraCost = 5;
}

class Digital extends Product
{
    protected $discount = 0.1;
}

class Used extends Product
{
    protected $discount = 0.2;
    protected $extraCost = 3;
}

$products = [
    new Physical("book", 20),
    new Digital("ebook", 20),
    new Used("tool", 20),
];

$total = 0;
foreach ($products as $product) {
    $total += $product->calcPrice();
}

printf("Total: %.2f €\n", $total);
