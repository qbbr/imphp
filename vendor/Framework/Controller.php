<?php

namespace Framework;

use Framework\Registry;

abstract class Controller
{
    public function __construct()
    {
        $reflector = new \ReflectionClass(get_called_class());
        Template::setPath(dirname($reflector->getFileName()) . '/../Resources/views/');
    }
}
