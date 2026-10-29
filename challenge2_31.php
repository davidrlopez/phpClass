<?php

class Person
{
    protected $name;
    protected $age;
    public static $persons = [];
    public function showData()
    {
        echo "$this->name is $this->age years old \n";
    }
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
        self::$persons[] = $this;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        if ($name >= 0) {
            $this->name = $name;
        }
    }
    public function getAge()
    {
        return $this->age;
    }
    public function setAge($age)
    {
        if ($age >= 0) {
            $this->age = $age;
        }
    }

    public static function isOlder(Person $p1, Person $p2)
    {
        if ($p1->age == $p2->age) {
            echo "Same age";
        }
        echo $p1->age > $p2->age
        ? "{$p1->name} is older than {$p2->name}\n"
        : "{$p2->name} is older than {$p1->name}\n";
    }
}

$person1 = new Person("Marcos", 21);
$person2 = new Person("Susana", 25);
$count = 1;
foreach (Person::$persons as $person) {
    $count++;
    $person->showData();
}
echo "Total number of persons:{$count}\n";
Person::isOlder($person1, $person2);
