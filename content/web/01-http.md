HTTP stands for Hypertext Transfer Protocol. It is a standard for how requests and responses should be formatted for
a server and a web browser. When you open a link in your web browser, you are sending a HTTP request to a server and it
is responding with a HTTP response. The browser then takes the response, parses it and displays it to the user.

Let us look at a HTTP request for PHP Apprentice. This is the request sent to the server from Firefox:
```http
GET /basics.html HTTP/2.0
Host: phpapprentice.com
User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10.14; rv:65.0) Gecko/20100101 Firefox/65.0
Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8
Accept-Language: en-US,en;q=0.5
Accept-Encoding: gzip, deflate, br
Connection: keep-alive
Upgrade-Insecure-Requests: 1
Pragma: no-cache
Cache-Control: no-cache
```
The first line of the request tells us three things. First, the method of the request. A `GET` request tells the server
that the browser just wants to download whatever is stored at the link. The second value `/basics.html` determines
what should be loaded from `phpapprentice.com`. Finally, the third value tells the server what type of HTTP request it is.

All of the lines below the top line are key/value pairs called headers. They give the server different pieces of information
about the client and the request to the server. For example, `Host` tells the server what website the browser is
trying to access.

In response to the client's HTTP request, the server will respond with a HTTP response. Here is the response for the above request:
```http
HTTP/2.0 200 OK
server: GitHub.com
content-type: text/html; charset=utf-8
last-modified: Sun, 13 Jan 2019 22:57:50 GMT
etag: W/"5c3bc26e-15a0"
access-control-allow-origin: *
expires: Mon, 18 Feb 2019 02:38:31 GMT
cache-control: max-age=600
content-encoding: gzip
x-github-request-id: 8596:461C:46C99E:5BB366:5C6A184F
accept-ranges: bytes
date: Mon, 18 Feb 2019 03:06:02 GMT
via: 1.1 varnish
age: 52
x-served-by: cache-fty21342-FTY
x-cache: HIT
x-cache-hits: 2
x-timer: S1550459163.720652,VS0,VE0
vary: Accept-Encoding
x-fastly-request-id: 00f0eec6f3037e428b8fc86742fe0f9965501a51
content-length: 2084

<!DOCTYPE html>
<html lang="en">
<head>
...
```

The top line of the response is in two parts, similar to a request.
The first part `HTTP/2.0` indicates the connection type, like the client.
The second part `200 OK` is the response code. `200` indicates a successful response.
There are many different response codes, the most famous being `404 Not Found`.

A response will have headers as well, but they are to give the client information about the response. As you can see,
the `Content-Type` is set to `text/html`, which tells the client how to render the content of the response.

Notice that below the list of response headers, there is also the content of the response. In this case, it is just HTML
which the browser can you use to display the page.

HTTP requests and responses are the core of web communication. Next, we will look at a request type other than `GET`.
