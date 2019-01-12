Classes allow you to define your own data types. All classes start with the
class keyword followed by the name of the class and opening and closing curly braces.
```php
<?php

class Car
{
}
```

To create an instance of a class, you use the `new` keyword in front of the class name
with parentheses.
```php
$car = new Car();
```

A class can define attributes and methods. An attribute is a piece of data
stored on the class instance. You can define an attribute by adding the
word `public` and a variable name inside the class definition.
```php
class Bicycle
{
    public $color;
}
```

Then, when you create an instance of the class, you can set and use
the attribute on the instance using `->`.
```php
$bike = new Bicycle();
$bike->color = 'Blue';
echo $bike->color . "\n";
```

An instance of a class is called an object. Congratulations!
You are now performing object-oriented development.
```php
$redBike = new Bicycle();
$redBike->color = 'Red';
echo $redBike->color . " Bike Object\n";
```

A method is a function attached to the class. You can add a method
to a class by using the `public` keyword followed by the function. A method
can access the attributes and methods of an object instance using the `$this` variable.
```php
class Tricycle
{
    public $color;

    public function echoColor()
    {
        echo $this->color . "\n";
    }
}
```

You can execute a method on an object using the same `->` arrow characters with parentheses after the method name.
```php
$bike = new Tricycle();
$bike->color = 'Red';
$bike->echoColor();
```
