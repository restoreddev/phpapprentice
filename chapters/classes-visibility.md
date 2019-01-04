In the last chapter, we defined properties and methods on the class using the public keyword.
You can also define them using the "protected" and "private" keywords.
Both keywords prevent the properties and functions from being accessible outside the object.
Only the object itself can use each.
```php
<?php

class Phone
{
    private $number;

    public function setNumber($number)
    {
        $this->number = $number;
    }
}
```

We cannot set the number using "$phone->number = '123-456-7890'".
Instead, we can use the public method.
```php
$phone = new Phone();
$phone->setNumber('123-456-7890');
```

Making an attribute or function private, gives you more control over the data in the object.
For example, we could prevent a number being set if it starts with a 7.
```php
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
```

The "protected" and "private" keywords work a little differently.
They both prevent functions and properties from being accessed outside an object.
However, a method or property marked "protected" can still be accessed by a child class.
```php
class Phone3
{
    private $number;

    protected $caller;

    public function setNumber($number)
    {
        $this->number = $number;
    }
}
```

In class "Smartphone", the "caller" property is accessible because the parent class
has it marked as "protected". However, "Smartphone" cannot access the "number" property
because it is still listed as private.
```php
class Smartphone extends Phone3
{
    public function setCaller($caller)
    {
        $this->caller = $caller;
    }
}
```
