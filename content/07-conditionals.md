+++
title = "Conditionals"
description = "Checking the if before the what"
tags = ["php", "conditionals", "if", "switch"]
slug = "conditionals"
previous = "boolean-logic.html"
next = "loops.html"
+++
When writing code, there will be times when you need to perform actions only under certain circumstances.
There are several ways to control execution in PHP.
We will start with an if statement.
```php
<?php

$animal = 'cow';
if ($animal == 'cow') {
    echo "Moooooo.....\n";
}
```

All conditionals check to see if a statement evaluates to true or false.
In the case above, since `$animal` equals 'cow', the statement returns true and the contents of the if statement are executed.

An if statement can have multiple conditions chained together.
If the first if statement returns false, then PHP will check each `elseif`.
If none of the checks return true, then the `else` block will be executed.
```php
$animal = 'bird';
if ($animal == 'dog') {
    echo "Woof! 🐶\n";
} elseif ($animal == 'cat') {
    echo "Meow!? 🐱\n";
} elseif ($animal == 'bird') {
    echo "Chirp! 🐦\n";
} else {
    echo "I am not a dog, cat or bird\n";
}
```

An alternative to the if statement is the switch.
A switch statement has multiple cases  to check if the value in parentheses equals something.
In this statement, since `$food` equals 'apples', the switch will echo "Eating an apple".
The default case will be run if no other case evaluates to true, like an else statement.
```php
$food = 'apples';
switch ($food) {
    case 'apples':
        echo "Eating an apple\n";
        break;
    case 'oranges':
        echo "Eating an orange\n";
        break;
    case 'peaches':
        echo "Eating a peach\n";
        break;
    default:
        echo "No food, I am hungry\n";
}
```

Breaks are a special keyword that tell PHP to stop execution once a case passes.
If you do not use a break, PHP will continue to execute all following cases.
In this switch, both "Drinking water" and "Drinking tea" will be executed since there is no break in the 'water' case.
```php
$drink = 'water';
switch ($drink) {
    case 'water':
        echo "Drinking water\n";
    case 'tea':
        echo "Drinking tea\n";
        break;
}
```

PHP also supports single line conditionals called a ternary.
In a ternary, the condition is followed by a question mark before the value that should be returned if the condition is true and then another colon and a value to return if the condition is false.
```php
$language = 'english';
echo $language == 'spanish' ? "hola\n" : "hello\n";
```

Lastly, there is another form of a ternary that checks if a value is set and then returns the value to the right of the two question marks if the value is null. Otherwise, if the value is set it returns the content of the variable.
```php
echo $IDoNotExist ?? "Variable not set\n";
```

You can also chain multiple checks in a row.
```php
$IExist = "Variable exists\n";
echo $IDoNotExist ?? $IExist ?? "Neither variable is set\n";
```
