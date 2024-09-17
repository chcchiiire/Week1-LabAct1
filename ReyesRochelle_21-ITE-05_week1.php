<?php
class Info {
    public $firstName;
    public $lastName;
    private $age;

    function __construct( $firstName, $lastName, $age ) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->setAge( $age );
}
public function getFullName() {
    return $this->firstName . ' ' . $this->lastName;
}

public function setAge($age) {
    if ($age >= 0) {
        $this->age = $age;
    }
}

public function getAge() {
    return $this->age;
}
}

class carInfo {
    public $make;
    public $model;
    protected $year;

    function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }
    public function getCarInfo() {
        return $this->make . ' ' . $this->model . ' (' . $this->year . ')';
    }
}

$person = new Info("Rochelle", "Reyes", 19);
echo "Name: " . $person->getFullName() . "<br>";
echo "Age: " . $person->getAge() . "<br>";

$person->setAge(19); 
echo "Updated Age: " . $person->getAge() . "<br>";

$car = new CarInfo("Mercedes", "G Class G500", 2020);
echo "Car: ". $car->getCarInfo() . "<br>";
?>