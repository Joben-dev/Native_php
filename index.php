<?php
// index.php

// Get the current URI
$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Define routes and their corresponding responses
$routes = [
    '/' => 'Hello, World!',
    '/about' => 'This is the About page!',
    '/contact' => 'This is the Contact page!',
];

// Check if the requested route exists
if (array_key_exists($requestUri, $routes)) {
    echo $routes[$requestUri];
} else {
    // If route does not exist, show a 404 message
    http_response_code(404);
    echo '404 Not Found';
}
