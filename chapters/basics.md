
In the tradition of our ancestors, let's start with a hello world program.
All PHP files must start with a <?php tag unless it is for a html template.
(We will learn about html templates later.)

```php
<?php

echo "Hello World!\n";
```

There is a lot going on in the above code so let's work through it.

First, the echo keyword tells PHP to output some text.
echo "I am some text\n";

Second, PHP stores text in strings.

To write a string, you surround letters with single or double quotes.
Double quoted strings can hold special characters like \n which tells PHP to start a new line.
```php
"\nI am a string on a new line";
```

Third, all lines of code in PHP must end in a semi-colon.
```php
echo "No semi-colon is a no-no\n";
```

Using semi-colons means we can write multiple statements on one line.
```php
echo "Hello"; echo " World\n";
```
