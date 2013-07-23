<?php

namespace Framework;

class Router
{
    public $routes = [];

    public function __construct($routes)
    {
        $this->routes = $routes;
    }

    public function run($uri)
    {
        foreach ($this->routes as $name => $params) {
            if ($args = $this->match($params['pattern'], $uri)) {
                list($bundle, $controller, $action) = explode(':', $params['controller']);

                return $this->callController(
                    $bundle . '\\Controller\\' . $controller . 'Controller',
                    $action . 'Action',
                    $args
                );
            }
        }

        throw new \Framework\NotFoundException('No route');
    }

    protected function callController($class, $method, $args)
    {
        return call_user_func_array(array(new $class, $method), $args);
    }

    protected function match($regex, $uri)
    {
        if (preg_match('#' . $regex . '#', $uri, $matches)) {
            if (count($matches) == 1) return array('');
            foreach (array_keys($matches) as $key) {
                if (is_int($key)) unset($matches[$key]);
            }
            return $matches;
        }

        return false;
    }
}
