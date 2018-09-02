<?php

// In the last chapter, we defined properties and methods on the class using the public keyword.
// You can also define them using the "protected" and "private" keywords.
// Both keywords prevent the properties and functions from being accessible outside the object.
// Only the object itself can use each.
class Phone
{
    private $number;

    public function setNumber($number)
    {
        $this->number = $number;
    }
}

// We cannot set the number using "$phone->number = '123-456-7890'".
// Instead, we can use the public method.
$phone = new Phone();
$phone->setNumber('123-456-7890');

// Making an attribute or function private, gives you more control over the data in the object.
// For example, we could prevent a number being set if it starts with a 7.
class Phone2
{
    private $number;

    public function setNumber($number)
    {
        if (substr($number, 0, 1) !== '7') {
            $this->number = $number;
        }
    }
}

// The "protected" and "private" keywords work a little differently, but we
// will learn more about "protected" when we discuss inheritance.
// However, they both prevent functions and properties from being accessed outside an object.
class Phone3
{
    private $number;
    protected $caller;
}
