<?php
//======================================================================
// ASSEMBLER SCHOOL - PHP Object Oriented Programming
//======================================================================

/* File 02 - Properties */

// classes have properties that contain information about that object defined by the class
class Mobile {
    public $name; // Public makes sure we can access this properties outside the class.
    public $chipset;
    public $internalMemory;
}

$modernMobile = new Mobile();

// in OOP and PHP we use the arrow operator ( -> ) for accessing properties

// we can assign those public properties in our class with this syntax
$modernMobile->name = "Samsung s20";
$modernMobile->chipset = "Exynos";
$modernMobile->internalMemory = 128;

echo "<br>";

// we can also access properties value by the arrow operator
echo $modernMobile->chipset;

// what happens if we assign a non existing value or a wrong value?
$modernMobile->ramMemory = 1;
$modernMobile->internMemory = 8;

echo "<pre>";
var_dump($modernMobile);
echo "</pre>";

echo "<br>";

//-----------------------------------------------------
// arrow operator is unique in objects and must not be
// confused with double arrow operator used in arrays
//-----------------------------------------------------

// this is an example using an array and double arrow operators
$mobileArray = [
    'name' => 'Xiaomi Mi10',
    'chipset' => 'Snapdragon',
    'internalMemory' => 64
];
echo $mobileArray['chipset'];


// * My practice

class Customer 
{
    public  $firstName;
    public  $lastName;
    public  $age;
}

$customer_1 = new Customer();

$customer_1->firstName = 'John';
$customer_1->lastName = 'Garcia';
$customer_1->age = 35;


$customer_2 = new Customer();

$customer_2->firstName = 'John';
$customer_2->lastName = 'Garcia';
$customer_2->age = 35.45;


echo "<pre>";
var_dump($customer_1) ;
var_dump($customer_2) ;