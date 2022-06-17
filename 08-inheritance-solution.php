<?php
//======================================================================
// ASSEMBLER SCHOOL - PHP Object Oriented Programming
//======================================================================

/* File 08 - Inheritance solution */

// Let's apply inheritance in latest example

use Customer as GlobalCustomer;

class Mobile
{
    public $name;
    public $chipset;
    public $internalMemory;

    public function __construct($name, $chipset, $internalMemory)
    {
        // when we create a constructor we can add arguments and then initialize the properties with those argument values
        $this->name = $name;
        $this->chipset = $chipset;
        $this->internalMemory = $internalMemory;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getChipset()
    {
        return $this->chipset;
    }

    public function getInternalMemory()
    {
        return $this->internalMemory;
    }

    public function getMobileDetails()
    {
        return "Name: $this->name, Chipset: $this->chipset, Internal Memory: $this->internalMemory";
    }
}

// When you extend a class, the subclass inherits all of the public and protected methods from the parent class.
class Blackberry extends Mobile
{
    public $keyboard;

    // in php we use __construct to tell our class that this is the constructor method
    public function __construct($name, $chipset, $internalMemory, $keyboard)
    {
        // we use same constructor as father class with parent keyword and double colon
        parent::__construct($name, $chipset, $internalMemory);
        // and add new arguments necessary for the new son class
        $this->keyboard = $keyboard;
    }

    //new method for getting keyboard type
    public function getKeyboard()
    {
        return $this->keyboard;
    }
}

$samsung = new Mobile('Samsung s20', 'Exynos', 128);
$blackberry = new BlackBerry('BlackBerry', 'ARM', 1, 'qwerty');
echo $blackberry->getName();
echo "\n";
echo $blackberry->getMobileDetails();


// * My Practice

class Customer
{
    // private $id;
    public $firstName;
    public $email;
    public $age;

    public function __construct($f, $e, $a)
    {
        $this->firstName = $f;
        $this->email = $e;
        $this->age = $a;
    }

    public function getEmail()
    {
        return $this->email;
    }

    
}

class Suscribe extends Customer
{

    public $plan;
    
    public function __construct($f, $e, $a, $p)
    {
        parent::__construct($f, $e, $a);
        $this->plan = $p;        
    }

}

$supcriptor_1 = new Suscribe("Jose", "jose@gmail.com", 12, 123);
echo "<pre>";

var_dump($supcriptor_1);

echo $supcriptor_1->getEmail();