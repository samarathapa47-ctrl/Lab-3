<?php
class Bicycle {
    public $brand;
    public $model;
    public $year;
    public $description = "Used bicycle";
    public $weight; 

    public function __construct($brand, $model, $year, $weight, $description = "Used bicycle") {
        $this->brand = $brand;
        $this->model = $model;
        $this->year  = $year;
        $this->weight = $weight;
        $this->description = $description;
    }

    public function getInfo() {
        return "{$this->brand} {$this->model} ({$this->year})";
    }

    public function setWeight($weight) {
        $this->weight = $weight;
    }

    public function getWeight($inKg = false) {
        if ($inKg) {
            return $this->weight / 1000 . " kg";
        }
        return $this->weight . " g";
    }
}

$bike1 = new Bicycle("Giant", "Escape 3", 2021, 12000);
$bike2 = new Bicycle("Trek", "FX 2", 2022, 10500, "Brand new bicycle");


echo $bike1->getInfo() . "<br>";
echo "Weight (kg): " . $bike1->getWeight(true) . "<br>";
echo "Weight (g): " . $bike1->getWeight() . "<br><br>";

echo $bike2->getInfo() . "<br>";
echo "Weight (kg): " . $bike2->getWeight(true) . "<br>";
echo "Weight (g): " . $bike2->getWeight() . "<br>";

