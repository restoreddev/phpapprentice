<?php

// In PHP, a class can extend another class, inheriting the parent class'
// properties and methods. To make a class a child of another, use the "extends"
// keyword after the class name.
class Vehicle
{
    public function drive()
    {
        echo "driving...\n";
    }
}

class Truck extends Vehicle {}

// This does not error because "Truck" extends "Vehicle".
$truck = new Truck();
$truck->drive();

// Even though the child class inherits a parent class' properties and methods,
// the child can still override the parent.
class Tractor extends Vehicle
{
    public function drive()
    {
        echo "driving slowly...\n";
    }
}

// The drive function now outputs "driving slowly..." instead of "driving...".
$tractor = new Tractor();
$tractor->drive();

// A class can use a parent's property or method from the "$this" variable.
class Motorcycle extends Vehicle
{
    public function pushPedal()
    {
        $this->drive();
    }
}

// Outputs "driving...".
$cycle = new Motorcycle();
$cycle->pushPedal();

// If you override a parent's property or method, the "$this" variable will refer to the child's
// implementation of the property or method. To call the parent's property or method explicity,
// use the "parent" keyword.
class Racecar extends Vehicle
{
    public function drive()
    {
        parent::drive();

        echo "driving even faster...\n";
    }
}

// Outputs "driving..." and "driving even faster...".
$racecar = new Racecar();
$racecar->drive();
