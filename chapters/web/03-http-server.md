In PHP, you usually use a separate web server program that accepts HTTP requests and passes them to PHP to create a response. Common examples of separate web server programs are Apache and Nginx. However, PHP has a built in web server we can use during development.

To use the development web server, open a terminal and a new folder for holding your code. Create a file called `index.php` and put this PHP code in it:
```php
<?php

echo 'Hello World!';
```
Go back to your terminal and start a PHP web server using this command:
```bash
php -S localhost:8080
```
Now, you can open `localhost:8080` in your web browser and you will see 'Hello World!' in the content of the page.

Next, we can use PHP to analyze all the information about the HTTP request sent from the browser to your PHP script. Change your `index.php` to have this code:
```php
<?php

$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];
$protocol = $_SERVER['SERVER_PROTOCOL'];
$headers = getallheaders();

echo "$method $uri $protocol <br/>";
foreach ($headers as $key => $header) {
    echo "$key: $header <br/>";
}
```
Reload `localhost:8080` and you will see the main request line and all of the headers printed on the web page. The `<br/>` tag is HTML for a new line. Since we are outputting to a web browser, we can no longer use `"\n"` to create a new line.

By default, PHP will generate the necessary response line and headers. If you open your browser console and open the network tab, you can see the response code and headers.
```http
HTTP/1.1 200 OK
Host: localhost:8080
Date: Sun, 28 Apr 2019 10:19:25 -0500
Connection: close
X-Powered-By: PHP/7.2.17
Content-type: text/html; charset=UTF-8
```
PHP set the response code to `200 OK` and the content type to `text/html`. Even though PHP will output good defaults, we can change them in our code if we want. Update your `index.php` file with this code:
```php
<?php

http_response_code(404);
header('Content-Type: text/plain');

echo "Not Found!";
```
We are changing the status code to `404 Not Found` and the content type to plain text. If you open `localhost:8080` in your browser, you will now see this HTTP response in your console:
```http
HTTP/1.1 404 Not Found
Host: localhost:8080
Date: Sun, 28 Apr 2019 10:26:40 -0500
Connection: close
X-Powered-By: PHP/7.2.17
Content-type: text/plain;charset=UTF-8
```
PHP added the other necessary headers for the response, but this time used `404` in the main response line and set the `Content-type` header to `text/plain`.
