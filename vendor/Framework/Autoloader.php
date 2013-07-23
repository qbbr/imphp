<?php

namespace Framework;

class Autoloader
{
    static public function register()
    {
        ini_set('unserialize_callback_func', 'spl_autoload_call');
        spl_autoload_register([new self, 'classLoader']);
    }

    static public function classLoader($class)
    {
        $classPath = str_replace('\\', DIRECTORY_SEPARATOR, $class);
        $className = basename($classPath);
        $classPath .= '.php';
        $rootDir = __DIR__ . '/../../';

        if (file_exists($rootDir . 'vendor/' . $classPath)) {
            require $rootDir . 'vendor/' . $classPath;
        } else if (file_exists($rootDir . 'src/' . $classPath)) {
            require $rootDir . 'src/' . $classPath;
        } else {
           throw new \Framework\Exception(sprintf('class "%s" not found', $className));
        }
    }
}
