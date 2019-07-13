+++
title = "Interfaces"
description = "Writing code contracts"
tags = ["php", "interface"]
slug = "interfaces"
previous = "static.html"
next = "abstract.html"
+++
The word `interface` is a confusing term because it is used for so many different concepts.
Most often, we use it to describe the appearance of an app and how a user interacts with it.
However, in PHP, an interface is a special construct that acts as a contract for classes.
An interface defines what methods a class should have.
```php
<?php

interface Chair
{
    public function setColor($color);
    public function setLegs($number);
}
```

To use an interface with a class, you use the `implements` keyword after the class name.
Now, the `Recliner` class must have a `setColor` method and a `setLegs` method.
If you do not create the required methods on the class, PHP will throw an error.
```php
class Recliner implements Chair
{
    private $color;
    private $legs;

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function setLegs($number)
    {
        $this->legs = $number;
    }
}
```

Interfaces are helpful when you are using code created by someone else.
For example, another developer may have created code that manages online payments, but they want to give you
the ability to create your own payment class that works with their code. In that case, the developer
creates an interface with all the required methods they need to charge a payment. The interface
becomes a contract between your code and the other developer's code to work a certain way.
```php
interface Payment
{
    public function charge($amount);
}

class CreditCard implements Payment
{
    public function charge($amount)
    {
        // contacts a credit card payment provider...
    }
}
```

Since `CreditCard` implements `Payment`, a developer can check that it implements `Payment` and then use the `charge` method knowing the function exists on the class.
```php
$creditCard = new CreditCard();
if ($creditCard instanceof Payment) {
    $creditCard->charge(25);
}
```
