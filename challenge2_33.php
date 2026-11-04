<?php

abstract class Product
{
    protected $name;
    protected $basePrice;

    public function __construct($name, $basePrice)
    {
        $this->name = $name;
        $this->basePrice = $basePrice;
    }

    public function getName()
    {
        return $this->name;
    }

    abstract public function calcPrice();
}

class Physical extends Product
{
    protected $shipCost = 5;

    public function calcPrice()
    {
        return $this->basePrice + $this->shipCost;
    }
}

class Digital extends Product
{
    protected $discount = 0.1;

    public function calcPrice()
    {
        return $this->basePrice * (1 - $this->discount);
    }
}

class Used extends Product
{
    protected $discount = 0.2;
    protected $prepFee = 3;

    public function calcPrice()
    {
        return $this->basePrice * (1 - $this->discount) + $this->prepFee;
    }
}

$products = [
    new Physical("book", 20),
    new Digital("ebook", 20),
    new Used("tool", 20),
];

$total = 0;
foreach ($products as $product) {
    printf("%s: %.2f\n", $product->getName(), $product->calcPrice());
    $total += $product->calcPrice();
}
printf("Total price: %.2f\n", $total);
