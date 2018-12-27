<?php

// Boolean logic is used to combine booleans to return another boolean.

// Using double ampersands tells PHP to check if both values are true.
// If so, it will return true. If not, it will return false.
$a = true;
$b = true;
$c = false;

// Returns true.
$a && $b;
// Returns false.
$a && $c;

// Using two pipe characters checks if either value is true.
// Then, it will return true. If both values are false, then PHP
// returns false.
$a = true;
$b = false;
$c = false;
$d = true;

// Returns true.
$a || $b;
// Returns false.
$b || $c;
// Returns true.
$a || $d;

// Using an exclamation point returns the value flipped.
$d = true;

// Outputs false.
echo !$d;
