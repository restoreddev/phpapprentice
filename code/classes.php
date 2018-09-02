<?php

// Classes allow you to define your own data types. All classes start with the
// class keyword followed by the name of the class and opening and closing curly braces.
class Car
{
}

// To create an instance of a class, you use the "new" keyword in front of the class name
// with parentheses.
$car = new Car();

// A class can define attributes and methods. An attribute is a piece of data
// stored on the class instance. You can define an attribute by adding the
// word "public" and a variable name inside the class definition.
class Bicycle
{
    public $color;
}

// Then, when you create an instance of the class, you can set and use
// the color attribute on the bicycle using "->".
$bike = new Bicycle();
$bike->color = 'Blue';
echo $bike->color . "\n";

// A method is a function attached to the class. You can add a method
// to a class by using the "public" keyword followed by the function. A method
// can access the attributes and methods of the instance using the "$this" variable.
class Tricycle
{
    public $color;

    public function echoColor()
    {
        echo $this->color . "\n";
    }
}

$bike = new Tricycle();
$bike->color = 'Red';
$bike->echoColor();
