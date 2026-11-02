<?php

class Circle
{
    protected $radius;
    public static $circles = [];

    public function __construct($radius)
    {
        $this->radius = $radius;
        self::$circles[] = $this;
    }
    public function showData()
    {
        echo "area={$this->calcArea()} m2, perimeter={$this->calcPerimeter()}\n";
    }
    public function calcArea()
    {
        return M_PI * $this->radius ** 2;
    }
    public function calcPerimeter()
    {
        return 2 * M_PI * $this->radius;
    }
}

$circle1 = new Circle(3);
$circle2 = new Circle(4);
foreach (Circle::$circles as $circle) {
    $circle->showData();
}

class Cylinder extends Circle
{
    protected $height;
    public static $cylinderss = [];
    public function __construct($radius, $height)
    {
        $this->height = $height;
        self::$cylinderss[] = $this;
        parent::__construct($radius);
    }
    public function getRadius()
    {
        return $this->radius;
    }
    public function setRadius($radius)
    {
        if ($radius >= 0) {
            $this->radius = $radius;
        }
    }
    public function calcVolume()
    {
        return parent::calcArea() * $this->height;
    }
    public function calcArea()
    {
        return ((parent::calcArea() * 2) + (parent::calcPerimeter() * $this->height));
    }
    public function showDataRectangle()
    {
        echo "area={$this->calcArea()} m2 ,volume={$this->calcVolume()} m3 ,perimeter={$this->calcPerimeter()}\n";
    }
}
$cylinders = new Cylinder(4, 8);
foreach (Cylinder::$cylinderss as $cylinders) {
    $cylinders->showDataRectangle();
}
