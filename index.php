<?php
// index.php

// Include the routes file
include 'routes.php';

// Define some routes
get('/', function() {
    return 'Hello, World!';
});

get('/about', function() {
    return 'This is the About page!';
});

post('/submit', function() {
    return 'Form submitted!';
});
