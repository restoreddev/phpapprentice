+++
title = "Abstract Classes"
description = "Inheriting an interface"
tags = ["php", "abstract"]
slug = "abstract"
previous = "interfaces.html"
next = "exceptions.html"
+++
Abstract classes are similar to interfaces in that they define methods that a sub-class must implement.
However, an abstract class can also have normal methods. To create an abstract class, use the `abstract`
keyword followed by `class` and the name of the class.
```php
<?php

abstract class CellPhone
{
    abstract public function unlock();

    public function turnOn()
    {
        echo "Holding power button...\n";
    }
}
```

To use an abstract class, you create another class that extends it and create any methods that were marked as abstract.
A class can only extend one abstract class and the child class has to implement all abstract methods.
```php
class iPhone extends CellPhone
{
    public function unlock()
    {
        echo "Touching fingerprint reader...\n";
    }
}
```

In this example, we use an abstract class to create the behavior for turning on a cell phone and then
force the child classes to implement how to unlock the phone. We have clearly defined what a cell phone
performs and we have limited code duplication.
```php
class Android extends CellPhone
{
    public function unlock()
    {
        echo "Typing passcode...\n";
    }
}
```

Our iPhone and Android classes can now both use the `turnOn` method and the `unlock` method.
```php
$iPhone = new iPhone();
$iPhone->turnOn();
$iPhone->unlock();

$android = new Android();
$android->turnOn();
$android->unlock();
```

You cannot create an instance of an abstract class. PHP would not know how to use the abstract methods
so when you try to create an abstract instance you will get an error.
```php
$cellPhone = new CellPhone(); // causes an error
```
