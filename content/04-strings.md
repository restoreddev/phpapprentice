+++
title = "Strings"
description = "Working with text"
tags = ["php", "strings"]
slug = "strings"
previous = "arithmetic.html"
next = "comparisons.html"
+++
As seen in the first chapter, a string is a group of characters created by
surrounding text in single or double quotes.
```php
<?php

$firstname = 'Joey';
$lastname = "Johnson";
```

A double quoted string can interpret special characters starting
with a back slash to create formatting. The `\n` creates a newline
between the names and after them.
```php
echo "Jacob\nJones\n";
```

Double quoted strings can also embed variables in the text. This code
outputs "Cindy Smith".
```php
$firstname = 'Cindy';
echo "$firstname Smith\n";
```

Another feature of strings is the ability to combine them together.
To combine two strings, use the period character in between them.
```php
$firstname = 'Jenny';
$lastname = 'Madison';
$fullname = $firstname . $lastname;
echo $fullname;
```
