<?php

include __DIR__ . '/challenge2_34.html';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $options = [
        "the cool party" => "A",
        "the angry party" => "B",
        "the supercrazy party" => "C",
    ];
    $selected = $_POST["parties"] ?? "";
    $party = "";
    $isValid = false;
    foreach ($options as $option => $value) {
        if ($value === $selected) {
            $isValid = true;
            $party = $option;
        }
    }
    echo $isValid ? "You have voted for {$party}\n <br>" : "Invalid option, try again\n <br>";

    $prime = $_POST["prime"] ?? "";
    function isPrime($prime)
    {
        if ($prime <= 1) {
            return false;
        } elseif ($prime == 2) {
            return true;
        }
        if ($prime % 2 == 0) {
            return false;
        }
        for ($i = 3; $i < $prime; $i += 2) {
            if ($prime % $i == 0) {
                return false;
            }
        }
        return true;
    }
    echo isPrime($prime) ? "$prime is a prime number\n <br>" : "$prime is not a prime number\n <br>";

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
    $nuggets = $_POST["nuggets"] ?? "";
    echo nuggets($nuggets) ? "You can buy $nuggets nuggets at Planes chicken\n <br>" : "You can't buy $nuggets nuggets at Planes chicken\n <br>";

    function oddPyramid($rows)
    {
        for ($fila = 1; $fila <= $rows; $fila++) {
            for ($j = 0; $j < $fila; $j++) {
                echo 1 + 2 * $j;
            }
            echo "<br>";
        }
    }

    function oddEvenPyramid($rows)
    {
        for ($fila = 1; $fila <= $rows; $fila++) {
            if ($fila % 2 == 0) {
                $inicio = 2;
            } else {
                $inicio = 1;
            }
            for ($j = 0; $j < $fila; $j++) {
                echo $inicio + 2 * $j;
            }
            echo "<br>";
        }
    }
    $rows = $_POST["rows"] ?? "";
    oddPyramid($rows);
    echo "<br>";
    oddEvenPyramid($rows);

    function gcd($numerator, $denominator)
    {
        for ($d = min($numerator, $denominator); $d > 0; $d--) {
            if ($numerator % $d == 0 && $denominator % $d == 0) {
                return $d;
            }
        }
        return -1;
    }

    $denominator = $_POST["denominator"] ?? "";
    $numerator = $_POST["numerator"] ?? "";
    function simplify($numerator, $denominator)
    {
        $gcd = gcd($numerator, $denominator);
        return [$numerator / $gcd, $denominator / $gcd];
    }
    echo gcd($numerator, $denominator) ," is the gcd\n <br>";
    echo "$numerator/$denominator simplified is ", implode("/", simplify($numerator, $denominator)), "\n <br>";
}

echo "<h3>g. Repeating characters</h3><pre>";

function repeatCharacter($character, $times)
{
    for ($i = 0; $i < $times; $i++) {
        echo $character;
    }
}

repeatCharacter("*", 7);
echo "\n\n";

for ($stars = 7; $stars >= 1; $stars--) {
    repeatCharacter("*", $stars);
    echo "\n";
}
echo "\n";

for ($size = 16; $size >= 1; $size /= 2) {
    for ($block = 0; $block < 16 / $size; $block++) {
        repeatCharacter(" ", $size);
        repeatCharacter("*", $size);
    }
    echo "\n";
}
echo "</pre>";

echo "<h3>h. Average</h3>";

function average($numbers)
{
    return array_sum($numbers) / count($numbers);
}

$numbers = [4, 6, 6, 5, 7, 15, 5, 1];

$average = average($numbers);
echo "Average: $average<br>";

echo "Average without duplicates: " . average(array_unique($numbers)) . "<br>";

$near = [];
foreach ($numbers as $number) {
    if (abs($number - $average) <= 3) {
        $near[] = $number;
    }
}
echo "Average without far values: " . average($near) . "<br>";

echo "<h3>i. Sold out</h3>";

$articles = [
    "TS" => "T-shirt",
    "PO" => "Pull over",
    "JE" => "Jeans",
    "SO" => "Socks",
    "CA" => "Cap",
];
$quantities = [
    "TS" => 2,
    "PO" => 0,
    "JE" => 5,
    "SO" => 0,
    "CA" => 0,
];

foreach ($quantities as $code => $quantity) {
    if ($quantity == 0) {
        echo "{$articles[$code]}<br>";
    }
}

echo "<h3>j. The 3 greatest numbers</h3>";

$first = [3, 17, 8, 25, 11];
$second = [12, 30, 1, 17];

$all = array_merge($first, $second);
rsort($all);
$greatest = array_slice($all, 0, 3);

echo implode(", ", $greatest) . "<br>";

echo "<h3>k. Wealth</h3>";

abstract class Possession
{
    protected $price;

    public function __construct($price)
    {
        $this->price = $price;
    }

    abstract public function calcValue();
    abstract public function calcTax($possessions);
}

class BankAccount extends Possession
{
    public function calcValue()
    {
        return $this->price;
    }

    public function calcTax($possessions)
    {
        return 0;
    }
}

class House extends Possession
{
    protected $years;

    public function __construct($price, $years)
    {
        parent::__construct($price);
        $this->years = $years;
    }

    public function calcValue()
    {
        return $this->price + $this->price * 0.1 * $this->years;
    }

    public function calcTax($possessions)
    {
        $houses = 0;
        foreach ($possessions as $possession) {
            if ($possession instanceof House) {
                $houses++;
            }
        }
        if ($houses == 1) {
            return 0;
        }
        return $this->calcValue() * 0.1;
    }
}

class Car extends Possession
{
    protected $kilometers;

    public function __construct($price, $kilometers)
    {
        parent::__construct($price);
        $this->kilometers = $kilometers;
    }

    public function calcValue()
    {
        $blocks = intdiv($this->kilometers, 10000);
        return max(0, $this->price - $this->price * 0.1 * $blocks);
    }

    public function calcTax($possessions)
    {
        return $this->calcValue() * 0.1;
    }
}

function printWealth($possessions)
{
    $wealth = 0;
    $taxes = 0;
    foreach ($possessions as $possession) {
        $wealth += $possession->calcValue();
        $taxes += $possession->calcTax($possessions);
    }
    echo "Wealth: $wealth<br>";
    echo "Taxes: $taxes<br>";
}

echo "Person with two houses:<br>";
printWealth([
    new BankAccount(5000),
    new House(100000, 5),
    new House(80000, 2),
    new Car(20000, 35000),
]);

echo "<br>Person with only one house:<br>";
printWealth([
    new BankAccount(5000),
    new House(100000, 5),
    new Car(20000, 35000),
]);

echo "<h3>l. Animals</h3>";

abstract class Animal
{
    protected $species;
    protected $weight;

    public function __construct($weight)
    {
        $this->weight = $weight;
    }

    public function print($animals)
    {
        echo "Species: {$this->species}, weight: {$this->weight} kg<br>";
        $count = 0;
        foreach ($animals as $animal) {
            if ($animal->species == $this->species) {
                $count++;
            }
        }
        if ($count < 3) {
            echo "- Warning: in danger of extinction<br>";
        }
    }

    public function canEat($other)
    {
        if ($this->species == $other->species) {
            return false;
        }
        return $this->weight > $other->weight;
    }
}

class Cat extends Animal
{
    protected $species = "cat";
}

class Rat extends Animal
{
    protected $species = "rat";
    protected $rabies;

    public function __construct($weight, $rabies)
    {
        parent::__construct($weight);
        $this->rabies = $rabies;
    }

    public function print($animals)
    {
        parent::print($animals);
        echo "- Rabies: " . ($this->rabies ? "yes" : "no") . "<br>";
    }

    public function canEat($other)
    {
        if ($this->rabies && $this->species != $other->species) {
            return true;
        }
        return parent::canEat($other);
    }
}

class Sheep extends Animal
{
    protected $species = "sheep";
    protected $color;

    public function __construct($weight, $color)
    {
        parent::__construct($weight);
        $this->color = $color;
    }

    public function print($animals)
    {
        parent::print($animals);
        echo "- Color: {$this->color}<br>";
    }

    public function canEat($other)
    {
        return false;
    }
}

$cat = new Cat(4);
$rat = new Rat(0.3, false);
$rabidRat = new Rat(0.4, true);
$sheep = new Sheep(60, "white");

$animals = [$cat, new Cat(5), new Cat(3.5), $rat, $rabidRat, $sheep];

foreach ($animals as $animal) {
    $animal->print($animals);
}

echo "<br>";
echo "Cat eats rat? " . ($cat->canEat($rat) ? "yes" : "no") . "<br>";
echo "Rat eats cat? " . ($rat->canEat($cat) ? "yes" : "no") . "<br>";
echo "Rabid rat eats cat? " . ($rabidRat->canEat($cat) ? "yes" : "no") . "<br>";
echo "Rabid rat eats rat? " . ($rabidRat->canEat($rat) ? "yes" : "no") . "<br>";
echo "Cat eats cat? " . ($cat->canEat($animals[1]) ? "yes" : "no") . "<br>";
echo "Cat eats sheep? " . ($cat->canEat($sheep) ? "yes" : "no") . "<br>";
echo "Sheep eats rat? " . ($sheep->canEat($rat) ? "yes" : "no") . "<br>";
