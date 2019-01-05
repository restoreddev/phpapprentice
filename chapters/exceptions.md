Sometimes things go wrong when someone uses your code. How do we handle this situation?
PHP has Exceptions to define errors and the ability to `throw` them to stop code
execution and tell the user of your code that something is wrong.
```php
<?php

class Processor
{
    public function charge($creditCard)
    {
        if (strlen($creditCard->getNumber()) !== 16) {
            throw new Exception('Credit card is not right');
        }
    }
}
```

In this case, if someone tried to use the `Processor` class
to charge a credit card number that is not 16 characters long, an
exception will be thrown which stops the rest of the code from running.
```php
$processor = new Processor();
$processor->charge('1234');
```

A developer who wants to prevent an exception from stopping code execution
can catch the exception and use it for logging or display the error to a user.

Just wrap the code that might throw an exception with the keyword `try` and brackets
followed by `catch`, the exception type in parentheses and more brackets.
```php
try {
    $processor->charge('1234');
} catch (Exception $e) {
    echo $e->getMessage() . "\n";
}
```

You can make your own custom exceptions as well. They are just classes
that extend the `Exception` class.
```php
class MyCustomException extends Exception {}
```

Then, you can try to catch your exception instead of the base exception.
```php
try {
    throw new MyCustomException('I am a custom exception');
} catch (MyCustomException $e) {
    echo "Cauth MyCustomException\n";
}
```

Since all exceptions inherit from `Exception`, catching
`Exception` will catch any and all exceptions that might be thrown.
```php
try {
    throw new MyCustomException('I inherit from Exception');
} catch (Exception $e) {
    echo "Still caught MyCustomException\n";
}
```

You can also create multiple catch blocks to handle different types of exceptions in
one try-catch.
```php
try {
    throw new MyCustomException('I am being thrown again');
} catch (MyCustomException $e) {
    echo "MyCustomException was caught\n";
} catch (Exception $e) {
    echo "Just in case a different exception is thrown\n";
}
```
