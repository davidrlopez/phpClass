<?php

class Circles
{
    protected $radius;
    protected $perimeter;
    protected $area;
    public static $circles = [];

    public function __construct($radius)
    {
        $this->radius = $radius;
        $this->perimeter = 2 * M_PI * $radius;
        $this->area = M_PI * $radius ** 2;
        self::$circles[] = $this;
    }
    public function showData()
    {
        echo "area=$this->area m2, perimeter=$this->perimeter\n";
    }
}

$circle1 = new Circles(3);
$circle1 = new Circles(4);
foreach (Circles::$circles as $circle) {
    $circle->showData();
}

class Cilinders extends Circles
{
    protected $height;
    public static $cilinders = [];
    public function __construct($radius, $height)
    {
        $this->height = $height;
        self::$cilinders[] = $this;
        parent::__construct($radius);
    }
    public function calcVolume()
    {
        return $this->area * $this->height;
    }
    public function calcArea()
    {
        return (($this->area * 2) + ($this->perimeter * $this->height));
    }
    public function showDataRectangle()
    {
        echo "area={$this->calcArea()} m2 ,volume={$this->calcVolume()} m3 ,perimeter=$this->perimeter\n";
    }
}
$cilinder = new Cilinders(4, 8);
foreach (Cilinders::$cilinders as $cilinder) {
    $cilinder->showDataRectangle();
}
