Boolean logic is used to combine booleans to return another boolean.

Using double ampersands tells PHP to check if both values are true.
If so, it will return true. If not, it will return false.
```php
<?php

$a = true;
$b = true;
$c = false;
```

Returns true.
```php
$a && $b;
```
Returns false.
```php
$a && $c;
```

Using two pipe characters checks if either value is true.
Then, it will return true. If both values are false, then PHP
returns false.
```php
$a = true;
$b = false;
$c = false;
$d = true;
```

Returns true.
```php
$a || $b;
```
Returns false.
```php
$b || $c;
```
Returns true.
```php
$a || $d;
```

Using an exclamation point returns the value flipped.
```php
$d = true;
```

Outputs false.
```php
echo !$d;
```
