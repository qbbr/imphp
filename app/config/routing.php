<?php

// global
$routes = [
];

// bundle
$routes = array_merge($routes, include __DIR__ . '/../../src/DemoBundle/Resources/config/routing.php');

return $routes;