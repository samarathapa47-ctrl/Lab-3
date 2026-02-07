<?php
class User {
    protected $name;
    protected $surname;
    protected $username;
    protected $is_admin = false;

    public function __construct($name, $surname, $username) {
        $this->name = $name;
        $this->surname = $surname;
        $this->username = $username;
    }

    public function isAdmin() {
        return $this->is_admin;
    }

    public function printFullName() {
        if ($this->is_admin) {
            echo $this->name . " " . $this->surname . " (admin)<br>";
        } else {
            echo $this->name . " " . $this->surname . "<br>";
        }
    }
}

class Customer extends User {
    private $city;
    private $state;
    private $country;

    public function __construct($name, $surname, $username) {
        parent::__construct($name, $surname, $username);
    }

    public function setCity($city) {
        $this->city = $city;
    }

    public function setState($state) {
        $this->state = $state;
    }

    public function setCountry($country) {
        $this->country = $country;
    }

    public function getCity() {
        return $this->city;
    }

    public function getState() {
        return $this->state;
    }

    public function getCountry() {
        return $this->country;
    }

    public function location() {
        return $this->city . ", " . $this->state . ", " . $this->country;
    }
}

class AdminUser extends User {

    public function __construct($name, $surname, $username) {
        parent::__construct($name, $surname, $username);
        $this->is_admin = true;
    }
}

$user = new User("John", "Doe", "jdoe");

$customer = new Customer("Alice", "Smith", "asmith");
$customer->setCity("Kathmandu");
$customer->setState("Bagmati");
$customer->setCountry("Nepal");

$admin = new AdminUser("Robert", "Brown", "rbrown");

$user->printFullName();
echo "Is admin: " . ($user->isAdmin() ? "Yes" : "No") . "<br><br>";

$customer->printFullName();
echo "Is admin: " . ($customer->isAdmin() ? "Yes" : "No") . "<br>";
echo "Location: " . $customer->location() . "<br><br>";

$admin->printFullName();
echo "Is admin: " . ($admin->isAdmin() ? "Yes" : "No") . "<br>";
