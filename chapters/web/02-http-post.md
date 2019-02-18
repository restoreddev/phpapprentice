HTTP uses multiple different request types for indicating actions that should be performed on the server. The most common ones
you will use are:
- GET     ->  Retrieve a resource
- POST    ->  Create a new resource
- PUT     ->  Replace an entire resource
- PATCH   ->  Update attributes of a resource
- DELETE  ->  Delete a resource

We have already seen a GET request. The next most common request type is POST. A POST request is structured the same as a GET request, however, it will contain data in the request body:
```http
POST /login.php HTTP/1.1
Host: localhost:8080
User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10.14; rv:65.0) Gecko/20100101 Firefox/65.0
Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8
Accept-Language: en-US,en;q=0.5
Accept-Encoding: gzip, deflate
Referer: http://localhost:8080/login.php
Content-Type: application/x-www-form-urlencoded
Content-Length: 30
Connection: keep-alive
Upgrade-Insecure-Requests: 1
Pragma: no-cache
Cache-Control: no-cache

username=php&password=password
```
The above request is an example login request created by Firefox. You can see in the first line that POST is used to declare the request type.
At the bottom of the request, the contents contain the user's username and password. A server can easily parse the data and do something with it. In this case, it can authenticate the user.

POST requests are used to send data to a server. A server will process the data and perform an action or store the data.

We have been talking a lot about how a server can process requests and send responses. How do programmers develop a server to handle HTTP requests? With PHP!

PHP was built with web server development in mind. Let us write our first PHP server script.


