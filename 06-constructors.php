<?php
//======================================================================
// ASSEMBLER SCHOOL - PHP Object Oriented Programming
//======================================================================

/* File 06 - Constructors & Destructors */

class Mobile
{
    public $name;
    public $chipset;
    public $internalMemory;

    // in PHP we use __construct to tell our class that this is the constructor method, it will be called automatically when an object of this class is created
    public function __construct($name, $chipset, $internalMemory)
    {
        // when we create a constructor we can add arguments and then initialize the properties with those argument values
        $this->name = $name;
        $this->chipset = $chipset;
        $this->internalMemory = $internalMemory;
        echo "+ " . $this->name . " CREATED +<br>";
    }

    // PHP will call __destruct at the end of the script, when the object is destructed or the script is stopped or exited.
    function __destruct()
    {
        echo "- DESTROYED : " . $this->name . " includes a " . $this->chipset . " chipset and " . $this->internalMemory . "GB of internal memory -<br>";
    }
}

// Now we can instantiate a mobile object passing arguments in the correct order
$modernMobile = new Mobile('Samsung s20', 'Exynos', 128);
$oldMobile = new Mobile('BlackBerry', 'ARM', 1);
echo "<br>";




// * My practice
class Dogs
{
    public $name;
    public $breed;
    public $weight;

    public function __construct($n, $b, $w)
    {
        $this->name     = $n;
        $this->breed    = $b;
        $this->weight   = $w; 
    }

    public function getName(){
        return "The name is " . $this->name . "\n";
    }


    public function __destruct()
    {
     echo "DESTRUC" .$this->name;   
    }

}

$dog_1 = new Dogs("Adele", "lavrador", 33);

echo "<pre>";
echo $dog_1->getName();
var_dump($dog_1);


