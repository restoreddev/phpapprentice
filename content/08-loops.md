+++
title = "Loops"
description = "Increase your repetitions"
tags = ["php", "loop", "foreach", "for"]
slug = "loops"
previous = "conditionals.html"
next = "arrays.html"
+++
A loop tells PHP to run a block of code more than once.
A classic loop is a while loop.
A `while` loop will continue to run the block of code as long as the value in parentheses is true.
```php
<?php

$num = 5;
while ($num > 0) {
    echo "While loop $num\n";
    --$num;
}
```

A `do while` loop is similar to a `while` loop except it always runs at least
one iteration. In a classic `while` loop, no iterations may be executed if
the value in parentheses is false. In a `do while`, the boolean check
is not done until after the execution of an iteration.
```php
$num = 0;
do {
    echo "Do while $num\n";
    ++$num;
} while ($num < 5);
```

`for` loops allow you to create a more concise while loop.
Inside the parentheses, the left section creates a variable before the loop
starts, the middle section is the check that is done at the beginning of each loop
and the third section is executed after each loop.
```php
for ($i = 0; $i < 10; $i++) {
    echo "For loop $i\n";
}
```

A `foreach` loop allows you to easily loop over an array.
An array is a list of data stored together.
The `as` keyword lets you assign a variable to the value
in the array for the current iteration of the loop.
```php
$set = [1, 2, 3, 4, 5];
foreach ($set as $num) {
    echo "Array value $num\n";
}
```

In loops, you can use the keyword `break` to stop the loop execution
no matter how many more iterations should run.
```php
$values = ['one', 'two', 'three'];
foreach ($values as $value) {
    if ($value === 'two') {
        break;
    }
    echo "Break $value\n";
}
```

The `continue` keyword stops executing the current loop iteration,
but then allows the loop to continue with other iterations.
```php
$values = ['one', 'skip', 'three'];
foreach ($values as $value) {
    if ($value === 'skip') {
        continue;
    }
    echo "Continue $value\n";
}
```
