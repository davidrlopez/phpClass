<?php

class Product
{
    protected $name;
    protected $basePrice;
    public $discount = 0;
    public $prepFee = 0;
    public $shipCost = 0;
    public static $products = [];

    public function __construct($name, $basePrice)
    {
        $this->name = $name;
        $this->basePrice = $basePrice;
        self::$products[] = $this;
    }
    public function calcPrice()
    {
        return $this->basePrice * (1 - $this->discount) + $this->prepFee + $this->shipCost;
    }
}

class Physical extends Product
{
    public $shipCost = 5;
    public static $physicals = [];
    public function __construct($name, $basePrice)
    {
        parent::__construct($name, $basePrice);
        self::$physicals[] = $this;
    }
}

class Digital extends Product
{
    public $discount = 0.1;
    public static $digitals = [];

    public function __construct($name, $basePrice)
    {
        parent::__construct($name, $basePrice);
        self::$digitals[] = $this;
    }
}

class Used extends Product
{
    public $prepFee = 3;
    public static $used = [];
    public $discount = 0.2;

    public function __construct($name, $basePrice)
    {
        parent::__construct($name, $basePrice);
        self::$used[] = $this;
    }
}

$phy1 = new Physical("book", 20);
$dig1 = new Digital("ebook", 20);
$us1 = new Used("tool", 20);

printf("Physical 1:{$phy1->calcPrice()}\nDigital:{$dig1->calcPrice()}\nUsed:{$us1->calcPrice()}\n");
printf("Total products:%d\n", count(Product::$products));
printf("Total physicals:%d\n", count(Physical::$physicals));
printf("Total digitals:%d\n", count(Digital::$digitals));
printf("Total used:%d\n", count(Used::$used));

$total = 0;
foreach (Product::$products as $product) {
    $total += $product->calcPrice();
}
printf("Total price:%.2f\n", $total);
