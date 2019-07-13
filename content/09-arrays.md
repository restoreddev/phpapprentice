+++
title = "Arrays"
description = "Time to make a list"
tags = ["php", "array", "list"]
slug = "arrays"
previous = "loops.html"
next = "functions.html"
+++
In PHP, arrays are used to store a list of items in a single variable.
There are two ways to create an array.

First, you can use the `array` construct to pass in values separated by commas
and it will return an array.
```php
<?php

$taskList = array('grocery store', 'change car oil');
```

Second, you can surround the list in square brackets.
This style is the most common and recommended form
of creating an array.
```php
$groceryList = ['bread', 'milk', 'eggs'];
```

PHP will automatically assign index keys for each value in an array
starting with 0. So, to access a value in an array you will
pass the key number into brackets after the variable name.
```php
echo $groceryList[0] . "\n";
echo $groceryList[1] . "\n";
```

You can also assign keys in an array using numbers or strings.
It is very common to create an array with string keys. The feature
is called an associative array or a map.
```php
$car = ['make' => 'Toyota', 'model' => 'Camry'];
```

To access the value in an associative array, just use the string key in brackets
after the variable name.
```php
echo $car['model'] . "\n";
```
