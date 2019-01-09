When writing a class, all of the properties and methods are being defined for the object
that will be created from the class.
```php
<?php

class House
{
    public $color;

    public function __construct($color)
    {
        $this->color = $color;
    }
}
```

Like building a house, a class is a blueprint that
defines what the house can do and the object is the house itself that can actually
perform the actions defined in the blueprint.
```php
$house = new House('Green');
```

However, what if you want the blueprint to have properties and methods?
That is when you use the `static` keyword. In this class, we will define a default color
on the class itself and then use it when creating a new object.
```php
class Skyscraper
{
    private static $popularColor;
    public $color;

    public static function setDefaultColor($color)
    {
        self::$popularColor = $color;
    }

    public function __construct()
    {
        $this->color = self::$popularColor;
    }
}
```

You can access static methods and properties using double colons on `self` inside the object
or on the class name outside of the object. Static methods and properties can only access
other static methods and properties.
```php
Skyscraper::setDefaultColor('Grey');
$skyscraper = new Skyscraper();
echo $skyscraper->color . "\n";
```

Often, you will see static constructors in PHP.
A static constructor creates a new instance of an object. Why would do that when you can just use "new Class" to create
the object? A common reason is to make the code more readable.
```php
class TinyHouse
{
    private $color;
    private $wheels;
    private $trailer;

    public static function build($color, $wheels, $trailer)
    {
        return new self($color, $wheels, $trailer);
    }

    public function __construct($color, $wheels, $trailer)
    {
        $this->color = $color;
        $this->wheels = $wheels;
        $this->trailer = $trailer;
    }
}
```

Using `build` can make more sense than `new`, but it is ultimately a personal preference.
```php
$house = TinyHouse::build('Blue', 4, true);
```
