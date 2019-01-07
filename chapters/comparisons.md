A boolean is a value that is always 0 or 1, yes or no, on or off.
In PHP, a boolean is represented by the words true and false.
While programming, you will often want to know if something is positive or negative.
```php
<?php

$a = true;
$b = false;
```

There are many constructs and functions that will return a boolean.
To start, let's look at comparisons.
```php
$one = 1;
$two = 2;
```

Double equals checks if two values are equal.
This statement will return false.
```php
$one == $two;
```

An exclamation point and equal sign check if two values are not equal.
This statement will return true.
```php
$one != $two;
```

You can use greater than and less than symbols to check for comparisons too.
This statement will return false.
```php
$one > $two;
```

This statement will return true.
```php
$one < $two;
```

If you combine a greater than or less than symbol with an equal,
it will check if the value is greater or less than or equal to another value.
```php
$one <= $two;
$one >= $two;
```
You can also check that two values are equal and of the same type
by using three equal signs.

The following comparisons return true.
```php
1 == 1;
1 == '1';
1 == true;
1 == 1.0;
1 === 1;
```

These return false.
```php
1 === '1';
1 === true;
1 === 1.0;
```
