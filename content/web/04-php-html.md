+++
title = "PHP HTML"
description = "Serving HTML using PHP"
tags = ["php", "http", "server"]
slug = "php-html"
previous = "web/http-server.html"
+++
The most common content type of HTTP messages is HTML. Hypertext Markup Language is the anchor of all websites. It is the language that defines how content should be displayed in a web page. Just as we saw in the last chapter with HTTP messages, PHP makes it easy to output HTML. In fact, PHP was built around enhancing HTML.

The Mozilla Developer Network has an [excellent tutorial](https://developer.mozilla.org/en-US/docs/Web/HTML) on HTML. I will assume that you can already write some HTML, however, I will use basic tags for this tutorial.

We can start by creating a new `index.php` file and running the localhost server: `php -S localhost:8080`. However, we are not going to start the file with a PHP tag. We are going to write some HTML.
```html
<!DOCTYPE html>
<html>
<head>
    <title>PHP Apprentice - HTML</title>
</head>
<body>
    <h1>I can write HTML!</h1>
</body>
</html>
```
If you open `http://localhost:8080` in your web browser, you will see `I can write HTML!` in big letters. PHP automatically sees that you have written some HTML and responds to the browser's GET request with the appropriate HTTP response headers and the body set to the HTML text.

How does the PHP runtime know when you are writing HTML or writing PHP code? It all depends on PHP tags. When you write `<?php`, the PHP runtime will interpret anything after that tag as PHP code. This is the reason why PHP files with only PHP code must start with `<?php`. When you want to stop writing PHP code, you can use `?>` as the closing tag. In PHP only files, the closing tag is unnecessary since the entire file is PHP. 

Using the PHP open and close tags, we can embed PHP code inside an HTML tag. For example, we can make our HTML message all caps using PHP.
```php
<!DOCTYPE html>
<html>
<head>
    <title>PHP Apprentice - HTML</title>
</head>
<body>
    <h1><?php echo strtoupper('I can write HTML!'); ?></h1>
</body>
</html>
```
Refresh your browser and you will see all the text in uppercase letters. When I wanted to run some PHP code, I used the PHP open tag: `<?php`. When I wanted to return to writing HTML, I used the closing tag: `?>`. In this way, you can easily output HTML documents to web browsers, while running code. Embedding PHP gives you the flexibility to create dynamic web pages.

I used the PHP keyword `echo` in the last example to output the string result of `strtoupper` inside the `<h1>` tags. PHP supports a shorthand opening tag that combines the open tag with echo: `<?=`. You could write the above example like the following.
```php
<h1><?= strtoupper('I can write HTML!'); ?></h1>
```
This example and the previous one are equivalent to the PHP runtime.