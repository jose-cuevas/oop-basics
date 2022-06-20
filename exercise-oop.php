<?php

// 1. Define class Animal
class Animal
{
    public int $age;
    public bool $fur;
    public bool $vertebrates;
    public string $type;

    public function __construct($age, $fur, $vtbr, $type)
    {
        $this->age = $age;
        $this->fur = $fur;
        $this->vertebrates = $vtbr;
        $this->type = $type;
    }

    // ? Executes at the end of script
    public function __destruct()
    {
        $this->age;
        $this->fur;
        $this->vertebrates;
        $this->type;
        echo "Destructs works";
    }

    public function breath()
    {
        return "The type of animal $this->type breaths";
    }
    public function move()
    {
        return "The type of animal $this->type moves";
    }
    public function sound()
    {
        return "The type of animal $this->type sounds";
    }
}

$myAnymal = new Animal(12, true, true, "mammal"); 
echo "<pre>";
var_dump($myAnymal);

// 2. Class that inherits base class


