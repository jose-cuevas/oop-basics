<?php
//======================================================================
// ASSEMBLER SCHOOL - PHP Object Oriented Programming
//======================================================================

/* File 09 - Access modifiers */

// Properties and methods can have access modifiers which control where they can be accessed. 
// thanks to them we can improve encapsulation to our classes.

class Mobile
{
    public $name; // public makes sure we can access this properties outside the class.
    private $chipset; // private elements may only be accessed by the class that defines the member.
    protected $internalMemory;
    private $imei;

    public function __construct($name, $chipset, $internalMemory, $imei)
    {
        $this->name = $name;
        $this->chipset = $chipset;
        $this->internalMemory = $internalMemory;
        $this->imei = $imei;
        echo "+ " . $this->name . " CREATED +<br>";
    }

    // now getters methods meke more sense because we won't be able to access properties outside the class
    public function getName()
    {
        return "--- " . $this->name . " ---<br>";
    }

    public function getChipset()
    {
        return $this->chipset;
    }

    public function getInternalMemory()
    {
        return $this->internalMemory;
    }

    // protected elements can be accessed only within the class itself and inside inherited classes.
    protected function getIMEI()
    {
        return $this->imei;
    }
}

class Blackberry extends Mobile
{
    private $keyboard;

    public function __construct($name, $chipset, $internalMemory, $imei, $keyboard)
    {
        parent::__construct($name, $chipset, $internalMemory, $imei);
        $this->keyboard = $keyboard;
    }

    // show protected imei
    public function showIMEI()
    {
        return $this->getIMEI();
    }
}

$samsung = new Mobile('Samsung s20', 'Exynos', 128, '000111222333');
$blackberry = new BlackBerry('BlackBerry', 'ARM', 1, '99966688555', 'qwerty');

//-----------------------------------------------------
// with this scenario we can't access private or protected
// attributes or methods via arrow operator
//-----------------------------------------------------

echo "<br>";
echo $samsung->getName(); // OK | Public method accessing a public property inside the class
echo "<br>";
echo $samsung->name; // OK | Public property
echo "<br>";
echo $samsung->getChipset(); // OK | Public method accessing a protected property inside the class
echo "<br>";
// echo $samsung->chipset; // ERROR | Private property so we can't access outside the class and throws: Fatal error: Uncaught Error: Cannot access privated property Mobile::$chipset
echo "<br>";
// echo $samsung->getIMEI(); // ERROR | Protected method so we can't call it outside our class and throws: Fatal error: Uncaught Error: Call to protected method Mobile::getIMEI() from context
echo "<br>";
// echo $samsung->imei; // ERROR | Private property so we can't access outside the class and throws: Fatal error: Uncaught Error: Cannot access private property Mobile::$imei
echo "<br>";
echo $blackberry->showIMEI(); // OK | Public method accessing a inherited protected method inside the class
echo "<br>";
echo $blackberry->getInternalMemory(); // OK | Public method accessing a inherited protected method inside the class
echo "<br>";
// echo $blackberry->internalMemory; // Uncaught Error: Cannot access protected property Blackberry::$internalMemory
echo "<br>";


// * My Practice

class Customer
{
    // private $id;
    public $firstName;
    private $email;
    protected $age;

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

    public function getAge()
    {
        return $this->age;
    }

}

$supcriptor_1 = new Suscribe("Jose", "jose@gmail.com", 12, 123);
echo "<pre>";
// var_dump($supcriptor_1);
// echo $supcriptor_1->getEmail();

echo $supcriptor_1->getEmail();
// echo $supcriptor_1->email;

// echo $supcriptor_1->age;
echo $supcriptor_1->getAge();