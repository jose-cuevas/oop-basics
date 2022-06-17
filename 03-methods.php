<?php
//======================================================================
// ASSEMBLER SCHOOL - PHP Object Oriented Programming
//======================================================================

/* File 03 - Properties */

// in a class we have properties and methods. This methods act like functions and allow classes to develop tasks and functionalities.
class Mobile
{
    public $name;
    public $chipset;
    public $internalMemory;

    // method that returns class properties in a string.
    public function showSpecs()
    {
        return $this->name . " includes a " . $this->chipset . " chipset and " . $this->internalMemory . "GB of internal memory";
    }
}


$modernMobile = new Mobile();
$modernMobile->name = "Samsung s20";
$modernMobile->chipset = "Exynos";
$modernMobile->internalMemory = 128;

echo $modernMobile->showSpecs();


// * My practice

class Student
{
    public $name;
    public $lastName;
    public $age;

    public function printStudent(){
        echo "First Name:" . $this->name . " Last Name:" . $this->lastName . " Age:" . $this->age;
    }
}

$student_1 = new Student();
$student_1->name = 'Anna';
$student_1->lastName = 'Cole';
$student_1->age = 29;



echo "<pre>";
var_dump($student_1);

$student_1->printStudent();