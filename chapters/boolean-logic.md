Boolean logic is used to combine booleans to return another boolean.

Using double ampersands tells PHP to check if both values are true.
If so, it will return true. If not, it will return false.
```php
<?php

$a = true;
$b = true;
$c = false;

$a && $b; // returns true
$a && $c; // returns false
```

Using two pipe characters checks if either value is true.
Then, it will return true. If both values are false, then PHP
returns false.
```php
$a = true;
$b = false;
$c = false;
$d = true;

$a || $b; // returns true
$b || $c; // returns false
$a || $d; // returns true
```

Using an exclamation point returns the opposite value.
```php
$d = true;
echo !$d; // outputs false
```
