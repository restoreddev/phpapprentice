<?php

// The variable is the basic building block of any programming language.
// In PHP, all variables start with a dollar sign.
$greeting;

// To set data in a variable, you put an equals sign after it and some data.
$greeting = 'Hello World!';

// Once you create a variable, you can use it again in other commands and functions.
echo $greeting;

// After the dollar sign, a PHP variable must have an alphabetic character or underscore. Also, variables are case sensitive.
$_var = 'I am a variable with an underscore!';
$Var = 'I am a variable with a capital letter!';
$var = 'I am a new variable';

// Variables can hold many different types of data, but there are four simple ones you can try now.
// An int is a number without a decimal place.
// A float is a number with a decimal place.
// A boolean can be two values: true or false.
// Last, there is a string: a collection of characters.
$int = 1;
$float = 100.10;
$bool = true;
$string = 'I am a string';

// In other programming languages, you have to write what type of data the variable will contain.
// PHP keeps it simple by allowing you to put any type of data in a variable, including already used variables.
$number = 1;
$number = 'one';
