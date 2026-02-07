<?php
interface Vehicle {
    public function startEngine();
    public function stopEngine();
}

class Car implements Vehicle {
    private $make;
    private $model;
    private $year;

    public function __construct($make, $model, $year) {
        $this->make  = $make;
        $this->model = $model;
        $this->year  = $year;
    }

    public function getMake() {
        return $this->make;
    }

    public function setMake($make) {
        $this->make = $make;
    }

    public function getModel() {
        return $this->model;
    }

    public function setModel($model) {
        $this->model = $model;
    }

    public function getYear() {
        return $this->year;
    }

    public function setYear($year) {
        $this->year = $year;
    }

    public function start() {
        echo "Car started.<br>";
    }

    public function displayInfo() {
        echo "Make: {$this->make}, Model: {$this->model}, Year: {$this->year}<br>";
    }

    public function getDescription() {
        return "This is a {$this->year} {$this->make} {$this->model}.";
    }

    public function startEngine() {
        echo "Engine started.<br>";
    }

    public function stopEngine() {
        echo "Engine stopped.<br>";
    }
}

class ElectricCar extends Car {
    private $batteryCapacity;

    public function __construct($make, $model, $year, $batteryCapacity) {
        parent::__construct($make, $model, $year);
        $this->batteryCapacity = $batteryCapacity;
    }

    public function getBatteryCapacity() {
        return $this->batteryCapacity;
    }

    public function setBatteryCapacity($batteryCapacity) {
        $this->batteryCapacity = $batteryCapacity;
    }

    public function charge() {
        echo "Electric car is charging.<br>";
    }

    public function getDescription() {
        return "This is an electric car with {$this->batteryCapacity} kWh battery.";
    }
}

$car = new Car("Toyota", "Corolla", 2022);
$car->start();
$car->displayInfo();
echo $car->getDescription() . "<br>";
$car->startEngine();
$car->stopEngine();

echo "<br>";

$electricCar = new ElectricCar("Tesla", "Model 3", 2023, 75);
$electricCar->start();
$electricCar->displayInfo();
$electricCar->charge();
echo $electricCar->getDescription();
