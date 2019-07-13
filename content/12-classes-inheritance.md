+++
title = "Classes: Inheritance"
description = "Extend your objects"
tags = ["php", "extend", "inheritance"]
slug = "classes-inheritance"
previous = "classes.html"
next = "classes-visibility.html"
+++
In PHP, a class can extend another class, inheriting the parent class'
properties and methods. To make a class a child of another, use the `extends`
keyword after the class name.
```php
<?php

class Vehicle
{
    public function drive()
    {
        echo "driving...\n";
    }
}

class Truck extends Vehicle {}
```

Using the `drive` method on the `Truck` class does not cause an error because `Truck` extends `Vehicle`.
```php
$truck = new Truck();
$truck->drive();
```

Even though the child class inherits a parent class' properties and methods,
the child can still override the parent.
```php
class Tractor extends Vehicle
{
    public function drive()
    {
        echo "driving slowly...\n";
    }
}
```

The drive function now outputs "driving slowly..." instead of "driving...".
```php
$tractor = new Tractor();
$tractor->drive();
```

A class can use a parent's property or method from the `$this` variable.
```php
class Motorcycle extends Vehicle
{
    public function pushPedal()
    {
        $this->drive();
    }
}
```

The `pushPedal` method outputs "driving...".
```php
$cycle = new Motorcycle();
$cycle->pushPedal();
```

If you override a parent's property or method, the `$this` variable will refer to the child's
implementation of the property or method. To call the parent's property or method explicity,
use the `parent` keyword.
```php
class Racecar extends Vehicle
{
    public function drive()
    {
        parent::drive();

        echo "driving even faster...\n";
    }
}
```

The `drive` method on `Racecar` now outputs "driving..." and "driving even faster...".
```php
$racecar = new Racecar();
$racecar->drive();
```
