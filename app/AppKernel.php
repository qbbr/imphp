<?php

use Framework\Kernel;
use Framework\Router;
use Framework\Registry;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        return [
            new DemoBundle\DemoBundle()
        ];
    }

    public function run($uri)
    {
        parent::boot();

        $routes = include __DIR__ . '/config/routing.php';
        $router = new Router($routes);
        return $router->run($uri);
    }

    public function configure()
    {
        $config = require_once __DIR__ . '/../app/config/config.php';

        \Framework\Db::setConfig($config['db']);
        unset($config['db']);

        Registry::set('config', $config);
    }
}
