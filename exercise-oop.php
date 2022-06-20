<?php
echo "<pre>";
// 1. Define class Animal
echo "<h2>Defining a class</h2>";

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

    // __destruct() Executes at the end of script
    // public function __destruct()
    // {
    //     $this->age;
    //     $this->fur;
    //     $this->vertebrates;
    //     $this->type;
    //     echo "Destructs works";
    // }

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

var_dump($myAnymal);


// 2. Class that inherits base class

echo "<h2>Inheritance</h2>";

class Cat extends Animal {
    public string $breed;

    // TODO:
    $this->age = 3; 
    

    public function __construct($age, $fur, $vtbr, $type, $breed)
    {
        parent::__construct($age, $fur, $vtbr, $type);
        $this->breed = $breed;
    }

    public function purr()
    {
        return "Cat is an animal wich purr"; 
    }

    public function sound()
    {
        return "Cat is an animal wich meows";
    }
}


$myCat = new Cat(100, true,true, 'mammar', 'bengali');
var_dump($myCat);

echo $myCat->age;
echo $myCat->purr();

// 3. Abstract Class
echo "<h2>Abstract Class</h2>";

abstract class Feline
{
    public string $whiskerType;

    public function __construct($whisker)
    {
        $this->whiskerType = $whisker;
    }

    abstract public function throwObjectInstance() : string;
}

class Tiger extends Feline
{
    public function __construct($whiskerType)
    {
        parent::__construct($whiskerType);
    }

    public function throwObjectInstance(): string
    {
        return "Tiger has a $this->whiskerType";
    }
}

$myTiger = new Tiger('big whisker');
var_dump($myTiger);
echo $myTiger->throwObjectInstance();

// 4. Interfaces
echo "<h2>Interfaces</h2>";

interface AliveAnimal
{
    public function breath();
    
}

class Horse implements AliveAnimal
{
    public function breath()
    {
        return "Horses breath";
    }
}

$myHorse = new Horse();
var_dump($myHorse);
echo $myHorse->breath();

