<?php

// Whenever you create an object in PHP, you put parentheses after the class name.
// In the previous examples, we always left the parentheses empty.
class Hat {
    public $color;

    public function setColor($color)
    {
        $this->color = $color;
    }
}

$hat = new Hat();

// However, you can actually pass data into the parentheses like a function.
// The data will be passed to a special function on the class called a constructor.
class Ballcap
{
    public $color;

    public function __construct($color)
    {
        $this->color = $color;
    }
}

// A constructor is not required, but can make creating a new object easier.
// They are usually used to define the initial value of a property.
// Instead of writing:
$hat = new Hat();
$hat->setColor('Red');

// You can write:
$ballcap = new Ballcap('Blue');

// Constructors do not return values because the return value is a always a new object.
class Tophat
{
    public function __construct($color)
    {
        return $color;
    }
}

// "$tophat" now holds an instance of Tophat, not the color "Grey".
$tophat = new Tophat('Grey');
