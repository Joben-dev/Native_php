<?php
// routes.php

function get($route, $callback) {
    if ($_SERVER['REQUEST_URI'] == $route) {
        echo $callback();
    }
}

function post($route, $callback) {
    if ($_SERVER['REQUEST_URI'] == $route && $_SERVER['REQUEST_METHOD'] == 'POST') {
        echo $callback();
    }
}