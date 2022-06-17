<?php
//======================================================================
// ASSEMBLER SCHOOL - PHP Object Oriented Programming
//======================================================================

/* File 01 - Classes */

// To create classes we use reserved word class.
class Mobile
{
    public $color;
    public $brand;
    public $country;
}

// We can instantitate classes like this
$modernMobile = new Mobile();
$oldMobile = new Mobile();

$myMobile = new Mobile();

// we can use var_dump so we can visualize our new class objects

echo "<pre>";
var_dump($modernMobile);
echo "<br>";
var_dump($oldMobile);

