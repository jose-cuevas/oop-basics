<?php
//======================================================================
// ASSEMBLER SCHOOL - PHP Object Oriented Programming
//======================================================================

/* File 05 - Setters */

// Setters are methods for modifying properties values
class Mobile
{
    public $name;
    public $chipset;
    public $internalMemory;

    public function getInternalMemory()
    {
        return $this->internalMemory;
    }

    // setters are methods for changing properties
    public function setInternalMemory($internalMemory)
    {
        echo "* CHANGED internal memory from " . $this->internalMemory;
        $this->internalMemory = $internalMemory;
        echo " to " . $this->internalMemory;
    }
}

echo "<br>";

$modernMobile = new Mobile();
$modernMobile->name = "Samsung s20";
$modernMobile->chipset = "Exynos";
$modernMobile->internalMemory = 128;

// echo "<pre>";
// var_dump($modernMobile);

echo "<br>";
echo $modernMobile->getInternalMemory();
echo "<br>";
$modernMobile->setInternalMemory(256);
echo "<br>";
echo $modernMobile->getInternalMemory();


// * My practice
class Customer 
{
    public  $firstName;
    public  $lastName;
    public  $age;

    // getter
    public function getFirstName()
    {
        return $this->firstName;
    }

    // setter
    public function setFirstName($newFirstName)
    {
        // echo "The previous first name was" . $this->firstName;
        // $this->firstName = $newFirstName;
        // echo " and the new name is " . $this->firstName;
        return $this->firstName = $newFirstName;
    }
}

$customer_1 = new Customer();

$customer_1->firstName = 'John';
$customer_1->lastName = 'Garcia';
$customer_1->age = 35;

echo "<pre>";
var_dump($customer_1);

// echo $customer_1->getFirstName();
echo $customer_1->setFirstName("JOSE");