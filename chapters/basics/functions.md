A function allows you to store code under a name and then execute
that code later.

A function always starts with the
function keyword followed by the name with parentheses and then
opening and closing curly braces around the code.
```php
<?php

function hello_world() {
    echo "hello world\n";
}
```

To call the function, use the function name with parentheses.
```php
hello_world();
```

You can set up values to be passed into a function.
To do so, write variables in between the function parentheses.
Each one should be separated by a comma.
```php
function greet($firstname, $lastname) {
    echo "hello $firstname $lastname\n";
}
```

Then, you can pass in values when calling a function. In the greet function,
'John' is assigned to `$firstname` and 'Smith' is assigned to
`$lastname`.
```php
greet('John', 'Smith');
```

You can also return a value from a function. You can only
return a single value from a function.
```php
function capitalize($value) {
    return mb_strtoupper($value);
}
```

When calling a function, it will output the return value which
you can load into a variable.
```php
$animal = capitalize('dog');
echo "$animal\n";
```

You can also create nameless functions called closures. Closures can be
stored in variables or passed into other functions.
```php
$sum = function ($a, $b) {
    return $a + $b;
};
```

You can execute a closure by putting parentheses after the variable that contains the closure.
```php
echo $sum(1, 2) . "\n";
```

A closure can only access the function's arguments ($a and $b) and any other variables created within itself. In this example, the current scope can access the $pi variable.
```php
$addToPi = function ($a, $b) {
    $pi = 3.14;
    return $pi + $a + $b;
};
echo $addToPi(1, 2) . "\n"; // Output: 6.14
```

If the $pi variable was defined outside the closure to make it reusable, then the close would not be able to access it.
```php
$pi = 3.14;
$addToPi = function ($a, $b) {
    return $pi + $a + $b;
};
echo $addToPi(1, 2) . "\n"; // Output: Undefined variable: pi
```

You can make a closure access a variable from the parent scope by using the `global` keyword. 
```php
$pi = 3.14;
$addToPi = function ($a, $b) {
    global $pi;
    return $pi + $a + $b;
};
echo $addToPi(1, 2) . "\n"; // Output: Output: 6.14
````

You can also make a closure access one or more variable from the parent scope by using the `use` language construct. 
```php
$pi = 3.14;
$addToPi = function ($a, $b) use ($pi) {
    return $pi + $a + $b;
};
echo $addToPi(1, 2) . "\n"; // Output: Output: 6.14
````
