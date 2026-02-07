<?php
class Student {
    public $name;
    public $surname;
    public $country;

    protected $indexNumber;

    private $tuition;

    public function getName() {
        return $this->name;
    }

    public function getSurname() {
        return $this->surname;
    }

    public function helloWorld() {
        return "Hello World";
    }

    protected function helloFamily() {
        return "Hello Family";
    }

    private function helloMe() {
        return "Hello me!";
    }

    private function getTuition() {
        echo $this->tuition;
    }

    public function callPrivateMethods() {
        echo $this->helloMe() . "<br>";
        $this->getTuition();
        echo "<br>";
    }

    public function setInternalData($indexNumber, $tuition) {
        $this->indexNumber = $indexNumber;
        $this->tuition = $tuition;
    }
}

class PartTimeStudent extends Student {

    public function helloParent() {
        return $this->helloFamily();
    }
}

$student = new Student();
$student->name = "Prasun";
$student->surname = "Lamichhane";
$student->country = "Nepal";
$student->setInternalData("ST101", 50000);

echo $student->getName() . "<br>";
echo $student->getSurname() . "<br>";
echo $student->helloWorld() . "<br>";
$student->callPrivateMethods();

echo "<br>";

$ptStudent = new PartTimeStudent();
$ptStudent->name = "Aayush";
$ptStudent->surname = "Sharma";
$ptStudent->country = "Nepal";
$ptStudent->setInternalData("PT202", 30000);

echo $ptStudent->getName() . "<br>";
echo $ptStudent->getSurname() . "<br>";
echo $ptStudent->helloWorld() . "<br>";
echo $ptStudent->helloParent() . "<br>";
